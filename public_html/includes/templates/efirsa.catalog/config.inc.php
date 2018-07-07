<?php
  $template_config = array(
    array(
      'key' => 'product_modal_window',
      'default_value' => '1',
      'title' => language::translate('template:title_product_modal_window_EC', 'Ventana Modal de Producto'),
      'description' => language::translate('template:description_product_modal_window_EC', 'Habilitar o desahabilitar la ventana modal del producto'),
      'function' => 'toggle("e/d")',
    ),
    array(
      'key' => 'sidebar_parallax_effect',
      'default_value' => '1',
      'title' => language::translate('template:title_sidebar_parallax_effect_EC', 'Efecto Parallax de la barra lateral'),
      'description' => language::translate('template:description_sidebar_parallax_effect_EC', 'Activa o desactiva el efecto de parallax de la barra lateral.'),
      'function' => 'toggle("e/d")',
    ),
    array(
      'key' => 'cookie_acceptance',
      'default_value' => '1',
      'title' => language::translate('template:title_cookie_acceptance_EC', 'Aceptación de cookies'),
      'description' => language::translate('template:description_cookie_acceptance_EC', 'Habilita o deshabilita el aviso de aceptación de cookies.'),
      'function' => 'toggle("e/d")',
    ),
  );
