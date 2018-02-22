<aside id="sidebar" class="aside_content">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>

<main id="content" class="container-category main_content">
  {snippet:notices}
  <div class="sub-menu">
  {snippet:breadcrumbs}
  </div>

  <div id="box-category" class="box">
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/box_order_by.inc.php'); ?>
    <h1 class="title"><?php echo $h1_title; ?></h1>

    <?php if ($_GET['page'] == 1 && trim(strip_tags($description))) { ?>
    <p class="description"><?php echo $description; ?></p>
    <?php } ?>

    <?php if ($_GET['page'] == 1 && $subcategories) { ?>

    <div class="categories row half-gutter   box-thumbnail ">
      <?php foreach ($subcategories as $subcategory) echo functions::draw_listing_category($subcategory); ?>
    </div>
    <?php } ?>

    <?php if ($products) { ?>
    <div class="products row half-gutter box-thumbnail">
      <?php foreach ($products as $product) {echo functions::draw_listing_product($product, $product['listing_type']);} ?>
    </div>
    <?php }  else if(!$subcategories) {?>
    <div class="container-alert">
      <div class="order-success">
        <p>NO HAY PRODUCTOS EN ESTA CATEGORÌA</p>
        <a href="<?php echo document::ilink('index_tienda'); ?>"><button class="btn-print">Regresar a la página principal</button></a>
      </div>
    </div>
    <?php }?>

    <?php echo $pagination; ?>
  </div>
</main>
