<?php
  document::$snippets['title'][] = 'Cotizaciones';
  document::$snippets['description'] = 'su descripcion aqui';

  $_mypage = new view();

  $_mypage->snippets = array(
    //'title' => 'Hello World',
  );

  echo $_mypage->stitch('pages/cotizaciones');
?>
