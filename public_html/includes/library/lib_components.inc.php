<?php
    class components {
        public static function __callstatic($function, $arguments) {
            $component = new component(); //Replica de la clase VIEW, solo se modifico el source del archivo inc.php
            $component->snippets = array(
                'data' => $arguments[0],
                'allData' => $arguments
            );
            return $component->stitch($function);
        }
    }
