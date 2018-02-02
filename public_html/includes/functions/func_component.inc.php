<?php

function component_getHtml($page){
           /*  
                $component = 'hero';
                echo( htmlspecialchars( components::$component( 
                array( 
                'title'=>'HEY!', 
                'subtitle'=>'The best subtitle', 
                'btn_title'=>'Ir a donde yo quiera', 
                'btn_link'=> 'http://www.google.com',
                'btn_enable' => true
                ) 
            ) 
            ) ); 
        */

    $output = '';
    foreach($page['sections'] as $section){//Itera las secciones
        $section['content'] = '';
        foreach($section['components'] as $component){ //Itera los componentes
            $componenet_name = $component['component_detail']['name'];
            $section['content'] .= ( components::$componenet_name($component['component_content']) );
        }
        $output .=  components::section( $section ); //Habra màs de un tipo se section ??????
    }
    echo ( $output );    
    echo htmlspecialchars( $output );    

    var_dump($page);

}