<?php
  document::$snippets['title'][] = language::translate('categories:head_title_EC', 'Categorias');
  document::$snippets['description'] = language::translate('categories:meta_description_EC', 'descripcion');

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

  echo $_page->stitch('pages/categories');
