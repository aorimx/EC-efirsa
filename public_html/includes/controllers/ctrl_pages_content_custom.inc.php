<?php
    class ctrl_pages_content_custom{
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
                "show fields from " . DB_TABLE_PAGES_CONTENT_CUSTOM
            );
            while ($field = database::fetch($fields_query)) {
                $this->data[$field['Field']] = null;
            }
        }

        public function load($id){
            $this->reset();
            $query = database::query(
                "select * from " . DB_TABLE_PAGES_CONTENT_CUSTOM .
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
            //$this->data['component_content'] = json_decode('{"title":"El mejor titulo","subtitle":"El mejor subtitle","btn_title":"btn","btn_link":"http://google.com"}',true);
            $this->data['component_content'] = json_decode($this->data['component_content'],true);
        }

 
        public function save(){
            if(empty($this->data['id'])){// Si no hay ID es porque es un registro nuevo
                database::query(
                    "insert into " . DB_TABLE_PAGES_CONTENT_CUSTOM .
                    " (component_content ,position,ec_pages_custom_id)  values " .
                    "( '" . json_encode($this->data['component_content']) . "','" . $this->data['position']  . "', '". $this->data['ec_pages_custom_id'] . "')" 
                );
                $this->data['id'] = database::insert_id();   
            }else{ //Hay que actualizar
                database::query(
                    "update " . DB_TABLE_PAGES_CONTENT_CUSTOM . " set " .
                    " component_content='" . json_encode($this->data['component_content']) . "', position='" . $this->data['position']  . "', ec_pages_custom_id='" . $this->data['ec_pages_custom_id'] . "' ".
                    " where id='" . (int)$this->data['id'] . "'"  
                );
            }
        }

        public function delete(){
            if(empty($this->data['id'])) return;
            database::query(
                "delete from " . DB_TABLE_PAGES_CONTENT_CUSTOM .
                " where id='" . (int)$this->data['id'] . "' limit 1;"
            );
            $this->reset();
        }

    }