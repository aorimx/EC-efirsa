<?php

function page_getHtml($page){
    $output = '';
    foreach($page['sections'] as $section){//Itera las secciones
        $section['content'] = '';
        foreach($section['components'] as $component){ //Itera los componentes
            $componenet_name = $component['component_detail']['name'];
            $section['content'] .= ( components::$componenet_name($component['component_content']) );
        }
        $output .=  components::section( $section ); //Habra màs de un tipo de section ??????
    }
    return  $output;
}