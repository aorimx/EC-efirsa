<div class="unit fourth">
<aside id="sidebar">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>
</div>
<div class="unit percent-70">
<main id="content">
  {snippet:notices}
  {snippet:breadcrumbs}

  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/box_product.inc.php'); ?>

  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_similar_products.inc.php');?>

  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_also_purchased_products.inc.php');?>
</main>
</div>