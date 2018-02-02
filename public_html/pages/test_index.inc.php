<?php
  $page = new ctrl_pages_custom(1);    
  $_page = new view();
  $_page->snippets = array(
    'page' => $page->data
  );
  echo $_page->stitch('pages/test_index');