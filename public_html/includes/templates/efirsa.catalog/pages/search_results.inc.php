<aside id="sidebar" class="aside_content-search">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>

<main id="content" class="main_content-search">
  {snippet:notices}
  <div id="box-search-results" class="box">
    <div class="btn-group pull-right hidden-xs container-filtros">
<?php
  $separator = false;
  foreach ($sort_alternatives as $key => $value) {
    if ($_GET['sort'] == $key) {
      echo '<span class="btn btn-default activo">'. $value .'</span>';
    } else {
      echo '<a class="btn btn-default" href="'. document::href_ilink(null, array('sort' => $key), true) .'">'. $value .'</a>';
    }
  }
?>
    </div>
  <div class="sub-menu_search">  
    {snippet:breadcrumbs}
  </div>
    <h1 class="title title-search"><?php echo $title; ?></h1>

    <?php if ($products) { ?>
      <div class="products row half-gutter box-thumbnail">
        <?php foreach ($products as $product) echo functions::draw_listing_product($product, 'column'); ?>
      </div>
    <?php } ?>

    <?php echo $pagination; ?>
  </div>
</main>