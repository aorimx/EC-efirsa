<?php
  document::$snippets['title'][] = 'Productos';
  document::$snippets['description'] = 'Your meta description here';
 
  $_mypage = new view();
 
  $_mypage->snippets = array(
    //'title' => 'Hello World',
  );
 
  echo $_mypage->stitch('pages/productos');
?>