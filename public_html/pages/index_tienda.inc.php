<?php

  document::$snippets['title'] = array(language::translate('index:head_title_EC1', ''), settings::get('store_name'));
  document::$snippets['description'] = language::translate('index:meta_description', '');
  document::$snippets['head_tags']['canonical'] = '<link rel="canonical" href="'. document::href_ilink('') .'" />';
  document::$snippets['head_tags']['opengraph'] = '<meta property="og:url" content="'. document::href_ilink('') .'" />' . PHP_EOL
                                                . '<meta property="og:type" content="website" />' . PHP_EOL
                                                . '<meta property="og:image" content="'. document::href_link(WS_DIR_IMAGES . 'logotype.png') .'" />';

  $_page = new view();
    document::$snippets['title'][] = language::translate('categories:head_title_EC', 'Categorias');
    document::$snippets['description'] = language::translate('categories:meta_description_EC', 'Descripcion');

    breadcrumbs::add(language::translate('title_categories_EC', 'Categorias'));

    $_page = new view();

    $categories_cache_id = cache::cache_id('categories', array('language'));
    if (!$_page->snippets['categories'] = cache::get($categories_cache_id, 'file')) {

      $categories_query = functions::catalog_categories_query();
      if (database::num_rows($categories_query)) {

        $_page->snippets = array(
          'categories' => array(),
        );

        while ($category = database::fetch($categories_query)) {
          $_page->snippets['categories'][] = $category;
        }
      }
      cache::set($categories_cache_id, 'file', $_page->snippets['categories']);
    }

  echo $_page->stitch('pages/index_tienda');
