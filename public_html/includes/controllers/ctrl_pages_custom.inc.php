<?php

    class ctrl_pages_custom{
        public $data;

        public function __construct($page_custom_id=null){
            if(!empty($page_custom_id))
                $this->load((int) $page_custom_id);
            else    
                $this->reset();
        }

        public function reset(){
            $this->data = array();
            $fields_query = database::query( 
                "show fields from " . DB_TABLE_PAGES_CUSTOM
            );
            while ($field = database::fetch($fields_query)) {
                $this->data[$field['Field']] = null;
            }
        }

        public function load($page_custom_id){
            $this->reset();
            $page_custom_query = database::query(
                "select * from " . DB_TABLE_PAGES_CUSTOM .
                " where id= '" . (int)$page_custom_id . "' limit 1; "
            );
            if ($page_custom = database::fetch($page_custom_query)) {
                $this->data = array_replace($this->data, array_intersect_key($page_custom, $this->data));
            } else {
                trigger_error('Could not find product (ID: '. (int)$page_custom_id .') in database.', E_USER_ERROR);
            }
            foreach ($page_custom as $key => $value) {
                $this->data[$key] = $value;
            }
            {
                $this->data['sections'] = array();
                $page_sections = database::query(
                    'SELECT id from ' . DB_TABLE_PAGES_SECTION_CUSTOM .
                    ' WHERE  	ec_pages_custom_id= ' . (int)$this->data['id']
                );
                while ($section = database::fetch( $page_sections ) ){
                    $this->data['sections'][] = (new ctrl_pages_section_custom($section['id']))->data;
                }

            }
        }

        public static function loadAll(){ //Obtiene todas las pàginas
            return database::query(
                'select * from ' .  DB_TABLE_PAGES_CUSTOM 
            );

        }

        public function loadSectionAsObj(){//Obtiene un listado de objetos de las secciones
            $data_aux = array();
            $query =   database::query(
                ' select id FROM ' .  DB_TABLE_PAGES_SECTION_CUSTOM 
                . ' where 	ec_pages_custom_id=' . (int)$this->data['id']
                . ' order by  position ASC '
            );
            
            database::free($query);
            return $data_aux;
        }
        
        public function loadSection(){ 
             $data_aux = array();
            $query =   database::query(
                ' select * FROM ' .  DB_TABLE_PAGES_SECTION_CUSTOM 
                . ' where 	ec_pages_custom_id=' . (int)$this->data['id']
                . ' order by  position ASC '
            );
            while ($component = database::fetch( $query ) ){
                $data_aux[] = $component;
            }
            database::free($query);
            return $data_aux;
        }

        public function loadComponents(){
            $data_aux = array();
            $query =   database::query(
                'select content.*,component.name, component.edit_view ' 
                . 'FROM ' .  DB_TABLE_PAGES_CONTENT_CUSTOM  . ' as content '  
                . ' inner join ' . DB_TABLE_PAGES_COMPONENT_CUSTOM . 'as component on ' . DB_TABLE_PAGES_COMPONENT_CUSTOM  .  '.id = ec_pages_component_custom_id' 
                . ' where 	ec_pages_custom_id=' . (int)$this->data['id']
                . ' order by  position ASC '
            );
            while ($component = database::fetch( $query ) ){
                $data_aux[] = $component;
            }
            database::free($query);
            return $data_aux;
        }


        public function loadComponentsDetail(){
            $data_aux = array();
            $query = database::query(
                " SELECT page.*, content.component_content, content.position, component.* " .
                " FROM " . DB_TABLE_PAGES_CUSTOM . " AS page " .
                " INNER JOIN " .  DB_TABLE_PAGES_CONTENT_CUSTOM . " AS content ON content.ec_pages_custom_id=page.id " .
                " INNER JOIN " . DB_TABLE_PAGES_COMPONENT_CUSTOM . " AS component ON component.id = content.ec_pages_component_custom_id " .
                " WHERE page.id =  " . (int)$this->data['id'] .
                " ORDER BY content.position ASC "
            );
            while ($component = database::fetch( $query ) ){
                $component ['component_content'] = json_decode($component ['component_content'],true);
                $data_aux[] = $component;
            }
            database::free($query);
            return $data_aux;
        }


        public function save(){
            if(empty($this->data['id'])){ // Si no hay ID es porque es un registro nuevo
                database::query(
                    "insert into " . DB_TABLE_PAGES_CUSTOM . 
                    "(language_code, title,meta_description) values " .
                    "('" . $this->data['language_code'] . "', '" .  $this->data['title'] ."','" . $this->data['meta_description'] . "')"
                );
                $this->data['id'] = database::insert_id();   
                return 'insert';
            }else{ //Hay que actualizar
                database::query(
                    "update " . DB_TABLE_PAGES_CUSTOM . " set " .
                    " language_code='" . $this->data['language_code'] . "', title='" . $this->data['title'] . "', meta_description='" . $this->data['meta_description'] ."'" .
                    "where id='" . (int)$this->data['id'] ."'"  
                );
                return 'update';

            }
        }

        public function delete(){
            if(empty($this->data['id'])) return;
            //Obtenemos el listado de secciòn para eliminarlas; La manera de implementar la eliminaciòn es poco eficiente pero lo màs propio para el POO
            $section_aux = null;
            foreach($this->loadSection() as $section){
                $section_aux = new ctrl_pages_section_custom($section['id']);
                $section_aux->delete();
            }
            database::query(
                "delete from " . DB_TABLE_PAGES_CUSTOM .
                " where id='" . (int)$this->data['id'] . "' limit 1;"
            );
            $this->reset();
        }


    }
