<aside id="sidebar" class="aside_content">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>


<main id="content" class="main_content">
  {snippet:notices}
  {snippet:breadcrumbs}

  <div id="box-manufacturer" class="box">

    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/box_order_by.inc.php'); ?>

    <h1 class="title"><?php echo $title; ?></h1>

    <?php if ($_GET['page'] == 1 && $description) { ?>
    <p class="description"><?php echo $description; ?></p>
    <?php } ?>

    <?php if ($products) { ?>
    <div class="products row half-gutter  box-thumbnail">
      <?php foreach ($products as $product) echo functions::draw_listing_product($product, 'column'); ?>
    </div>
    <?php } ?>

    <?php echo $pagination; ?>
  </div>
</main>