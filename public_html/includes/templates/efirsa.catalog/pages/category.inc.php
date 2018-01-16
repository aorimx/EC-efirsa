<!--<aside id="sidebar">
  <?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>-->

<main id="content" class="container-category">
  {snippet:notices}
  <div class="sub-menu">
  {snippet:breadcrumbs}
  </div>
  <div id="box-category" class="box">

    <?php if ($products) { ?>
    <div class="btn-group pull-right hidden-xs container-filtros">

<br>

Ordenar por
<?php
  echo '<select id="bar-order-by">';
  foreach ($sort_alternatives as $key => $value) {
    if ($_GET['sort'] == $key) {
      //echo '<span class="btn btn-default activo">'. $value .'</span>';
      echo '<option selected>' . $value  . '</option>';
    } else {
      //echo '<a class="btn btn-default" href="'. document::href_ilink(null, array('sort' => $key), true) .'">'. $value .'</a>';
      echo '<option value="' . document::href_ilink(null, array('sort' => $key), true) .  '">' . $key . '</option>';
    }
  }
  echo '</select>';
?>
<img id="bar-order-by-show-grid" alt="Celdas"/>
<img id="bar-order-by-show-list" alt="List" />


<div class="toggle list">TOGGLE</div>
    </div>
    <?php } ?>

    <h1 class="title"><?php echo $h1_title; ?></h1>

    <?php if ($_GET['page'] == 1 && trim(strip_tags($description))) { ?>
    <p class="description"><?php echo $description; ?></p>
    <?php } ?>

    <?php if ($_GET['page'] == 1 && $subcategories) { ?>
    <div class="categories row half-gutter">
      <?php foreach ($subcategories as $subcategory) echo functions::draw_listing_category($subcategory); ?>
    </div>
    <?php } ?>

    <?php if ($products) { ?>
    <div class="products row half-gutter box-thumbnail">
      <?php foreach ($products as $product) {echo functions::draw_listing_product($product, $product['listing_type']);} ?>
    </div>
    <?php } ?>

    <?php echo $pagination; ?>
  </div>
</main>