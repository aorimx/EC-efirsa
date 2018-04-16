<?php
  document::$snippets['title'][] = 'Contacto';
  document::$snippets['description'] = 'Ysu descripcion aqui';

  $_mypage = new view();

  $_mypage->snippets = array(
    //'title' => 'Hello World',
  );

  echo $_mypage->stitch('pages/contacto');
?>
