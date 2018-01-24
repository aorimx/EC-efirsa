
<aside id="sidebar" class="aside_content-search">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>

<main id="content" class="main_content-search">
  {snippet:notices}
  <div id="box-search-results" class="box">

  <div class="btn-group pull-right hidden-xs container-filtros">
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/box_order_by.inc.php'); ?>
  </div>

  <div class="sub-menu_search">  
     {snippet:breadcrumbs}
  </div>
    <h1 class="title title-search"><?php echo $title; ?></h1>

    <?php if ($products) { ?>
      <div class="products  half-gutter box-thumbnail  <?php echo $listing_type; ?> " >
    <?php foreach ($products as $product) echo functions::draw_listing_product($product, $listing_type /*'column'*/ ); ?>
      </div>
    <?php } ?>

    <?php echo $pagination; ?>
  </div>
</main>