<?php
  $page = new ctrl_pages_custom(1);    
  $_page = new view();
  $_page->snippets = array(
    'page' => functions::page_getHtml($page->data),
    'some_extra_var_1' => 'Some extra var 1',
    'some_extra_var_2'=> 'Some extra var 2',
  );
  echo $_page->stitch('pages/test_index');