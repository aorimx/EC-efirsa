<?php

  $app_config = array(
    'name' =>'1 Leo modulo demo',
    'default' => 'pagelist',
    'theme' => array(
      'color' => '#ff344a',
      'icon' => 'fa-shower',
    ),
    'menu' => array(
      array(
        'title' => language::translate('title_template', 'Template') .  ' - Leo Title',
        'doc' => 'template',
        'params' => array(),
      ),
      array(
        'title' => 'Page list',
        'doc' => 'pagelist',
        'params' => array()
      ),
      /*
      array(
        'title' => 'Page detail',
        'doc' => 'pagedetail',
        'params' => array()
      ),
      array(
        'title' => 'Hero Component detail',
        'doc' => 'hero',
        'params' => array()
      )
      */
    ),
    'docs' => array(
      'template' => 'template.inc.php',
      'pagelist' => 'pagelist.inc.php',
      'edit_page' => 'edit_page.inc.php',



      'hero' => 'component/hero.inc.php',
      'contact' => 'component/contact.inc.php',

      'template_settings' => 'template_settings.inc.php',
    ),
  );
