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
        }

        public static function loadAll(){ //Obtiene todas las pàginas
            return database::query(
                'select * from ' .  DB_TABLE_PAGES_CUSTOM 
            );
        }

        

        public function loadComponents(){
            return   database::query(
                'select * FROM ' .  DB_TABLE_PAGES_CONTENT_CUSTOM 
                . ' inner join ' . DB_TABLE_PAGES_COMPONENT_CUSTOM . 'on ' . DB_TABLE_PAGES_COMPONENT_CUSTOM  .  '.id = ec_pages_component_custom_id' 
                . ' where 	ec_pages_custom_id=' . (int)$this->data['id']
                . ' order by  position ASC '
            );
        }

        public function save(){
            if(empty($this->data['id'])){ // Si no hay ID es porque es un registro nuevo
                database::query(
                    "insert into " . DB_TABLE_PAGES_CUSTOM . 
                    "(language_code, title) values " .
                    "('" . $this->data['language_code'] . "', '" .  $this->data['title'] ."')"
                );
                $this->data['id'] = database::insert_id();   
                return 'insert';
            }else{ //Hay que actualizar
                database::query(
                    "update " . DB_TABLE_PAGES_CUSTOM . " set " .
                    " language_code='" . $this->data['language_code'] . "', title='" . $this->data['title'] . "'" .
                    "where id='" . (int)$this->data['id'] ."'"  
                );
                return 'update';

            }
        }

        public function delete(){
            if(empty($this->data['id'])) return;
            database::query(
                "delete from " . DB_TABLE_PAGES_CUSTOM .
                " where id='" . (int)$this->data['id'] . "' limit 1;"
            );
            $this->reset();
        }


    }
