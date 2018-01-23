<aside id="sidebar" class="aside_content">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>

<main id="content" class="main_content">
  {snippet:notices}

  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/box_search.inc.php'); ?>
  


  <ul class="nav nav-tabs nav-justified" style="overflow: hidden;">
    <?php if ($display_campaign_products = (settings::get('box_campaign_products_num_items') && database::num_rows(functions::catalog_products_query(array('campaign' => true, 'limit' => 1)))) ? true : false) { ?>
      <li><a href="#campaign-products" data-toggle="tab"><?php echo language::translate('title_campaign_products', 'Campaign Products'); ?></a></li><?php } ?>
    <!--<li><a href="#popular-products" data-toggle="tab"><?php /*echo language::translate('title_popular_products', 'Popular Products'); ?></a></li>
    <li><a href="#latest-products" data-toggle="tab"><?php echo language::translate('title_latest_products', 'Latest Products');*/ ?></a></li>-->
  </ul>

  <div class="tab-content">
    <?php if ($display_campaign_products) { ?>
    <div class="tab-pane fade in" id="campaign-products">
      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_campaign_products.inc.php'); ?>
    </div>
    <?php } ?>
    <!--
    <div class="tab-pane fade in" id="popular-products">
      <?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_popular_products.inc.php'); ?>
    </div>-->

    <div class="tab-pane fade in active" id="latest-products">
      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_latest_products.inc.php'); ?>
    </div>
  </div>

</main>
<div class="j-wrap padding-top">
  <div class="banner-content">
    <div class="banner">
      <div class="image-banner">
        <!-- img class="image" src="../../includes/templates/default.catalog/ef-s/img/Banner.png"-->
        <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_slides.inc.php'); ?>
      </div>
    </div>
  </div>
</div>
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_recently_viewed_products.inc.php'); ?>
  