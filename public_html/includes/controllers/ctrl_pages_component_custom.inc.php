<?php
    class ctrl_pages_component_custom{
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
                "show fields from " . DB_TABLE_PAGES_COMPONENT_CUSTOM
            );
            while ($field = database::fetch($fields_query)) {
                $this->data[$field['Field']] = null;
            }
        }

        public function load($id){
            $this->reset();
            $query = database::query(
                "select * from " . DB_TABLE_PAGES_COMPONENT_CUSTOM .
                " where id= '" . (int)$id . "' limit 1; "
            );
            if ($item = database::fetch($query)) {
                $this->data = array_replace($this->data, array_intersect_key($item, $this->data));
            } else {
                trigger_error('Could not find product (ID: '. (int)$id .') in database.', E_USER_ERROR);
            }
            foreach ($item as $key => $value) {
                $this->data[$key] = $value;
            }
        }

        public static function loadAll(){
            return database::query(
                "select * from " . DB_TABLE_PAGES_COMPONENT_CUSTOM
            );
        }

        public function save(){
            if(empty($this->data['id'])){// Si no hay ID es porque es un registro nuevo
                database::query(
                    "insert into " . DB_TABLE_PAGES_COMPONENT_CUSTOM .
                    " (name ,edit_view)  values " .
                    "( '" . $this->data['name'] . "','" . $this->data['edit_view']  . "', '". $this->data['ec_pages_custom_id'] . "')" 
                );
                $this->data['id'] = database::insert_id();   
            }else{ //Hay que actualizar
                database::query(
                    "update " . DB_TABLE_PAGES_COMPONENT_CUSTOM . " set " .
                    " name='" . $this->data['name'] . "', edit_view='" . $this->data['edit_view']  . "'"  
                );
            }
        }

        public function delete(){
            if(empty($this->data['id'])) return;
            database::query(
                "delete from " . DB_TABLE_PAGES_COMPONENT_CUSTOM .
                " where id='" . (int)$this->data['id'] . "' limit 1;"
            );
            $this->reset();
        }



    }