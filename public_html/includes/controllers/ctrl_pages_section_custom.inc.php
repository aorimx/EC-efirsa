<?php

    class ctrl_pages_section_custom{
        public $data;

        public function __construct($id=null){
            if(!empty($id))
                $this->load((int) $id);
            else    
                $this->reset();
        }

        public function reset(){
            $this->data = array();
            $fields_query = database::query( 
                "show fields from " . DB_TABLE_PAGES_SECTION_CUSTOM
            );
            while ($field = database::fetch($fields_query)) {
                $this->data[$field['Field']] = null;
            }
        }

        public function load($id){
            $this->reset();
            $page_custom_query = database::query(
                "select * from " . DB_TABLE_PAGES_SECTION_CUSTOM .
                " where id= '" . (int)$id . "' limit 1; "
            );
            if ($page_custom = database::fetch($page_custom_query)) {
                $this->data = array_replace($this->data, array_intersect_key($page_custom, $this->data));
            } else {
                trigger_error('Could not find section (ID: '. (int)$page_custom_id .') in database.', E_USER_ERROR);
            }
            foreach ($page_custom as $key => $value) {
                $this->data[$key] = $value;
            }

            {
                $this->data['components'] = array();
                $section_components = database::query(
                    'SELECT id from ' . DB_TABLE_PAGES_CONTENT_CUSTOM .
                    ' WHERE ec_pages_section_custom_id= ' . (int)$this->data['id']
                );
                while ($component = database::fetch( $section_components ) ){
                    $this->data['components'][] = (new ctrl_pages_content_custom($component['id']))->data;
                }

            }
            


        
        }

        public function loadComponents(){//Obtiene los componentes de la seccion
            $data_aux = array();
            $query =   database::query(
                "SELECT content.component_content,content.id,component.name, component.edit_view" .
                " FROM " .  DB_TABLE_PAGES_SECTION_CUSTOM . " AS section " .
                " INNER JOIN " . DB_TABLE_PAGES_CONTENT_CUSTOM ." AS content ON content.ec_pages_section_custom_id = section.id " .
                " INNER JOIN " . DB_TABLE_PAGES_COMPONENT_CUSTOM . " AS component ON component.id = content.ec_pages_component_custom_id " .
                " WHERE section.id = " .  (int)$this->data['id'] . 
                " ORDER BY content.position ASC "
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


        public function save($ec_pages_custom_id=null){
            if(empty($this->data['id'])){ // Si no hay ID es porque es un registro nuevo
                database::query(
                    "insert into " . DB_TABLE_PAGES_SECTION_CUSTOM . 
                    "(position, name,ec_pages_custom_id) values " .
                    "('" . $this->data['position'] . "', '" .  $this->data['name'] ."', '" . $ec_pages_custom_id  . "')"
                );
                $this->data['id'] = database::insert_id();   
                return 'insert';
            }else{ //Hay que actualizar
                database::query(
                    "update " . DB_TABLE_PAGES_SECTION_CUSTOM . " set " .
                    " position='" . $this->data['position'] . "', name='" . $this->data['name'] . "', ec_pages_custom_id='" . $this->data['ec_pages_custom_id'] . "'" .
                    "where id='" . (int)$this->data['id'] ."'"  
                );
                return 'update';

            }
        }

        public function delete(){
            if(empty($this->data['id'])) return;
            //Obtenemos un listado de todos los componentes que contenga la secciòn para eliminarlos
            $content_aux = null;
            foreach($this->loadComponents() as $component){
                $content_aux = new ctrl_pages_content_custom($component['id']);
                $content_aux->delete();
            }
            database::query(
                "delete from " . DB_TABLE_PAGES_SECTION_CUSTOM .
                " where id='" . (int)$this->data['id'] . "' limit 1;"
            );
            $this->reset();
        }


    }
