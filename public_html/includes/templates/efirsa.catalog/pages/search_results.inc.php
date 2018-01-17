<aside id="sidebar" class="aside_content-search">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>

<main id="content" class="main_content-search">
  {snippet:notices}
  <div id="box-search-results" class="box">

  <div class="btn-group pull-right hidden-xs container-filtros">
      <span id="caption">Ordenar por</span>
      <div class="select">
        <?php
          $separator = false;
          echo '<select>';
          foreach ($sort_alternatives as $key => $value) {
            if ($_GET['sort'] == $key) {
              //echo '<span class="btn btn-default activo">'. $value .'</span>';
              echo '<option selected>' . ucfirst($value)  . '</option>';
            } else {
              //echo '<a class="btn btn-default" href="'. document::href_ilink(null, array('sort' => $key), true) .'">'. $value .'</a>';
              echo '<option value="' . document::href_ilink(null, array('sort' => $key), true) .  '">' . ucfirst($value) . '</option>';
            }
          }
          echo '</select>';
        ?>
      </div>
      <!--div id="view">
        <a href="<?php echo  document::href_ilink(null, array('view' => 'column'), true) ?>"><i  class="fa fa-th" aria-hidden="true"></i></a>
        <a href="<?php echo  document::href_ilink(null, array('view' => 'row'), true) ?>"><i  class="fa fa-align-justify" aria-hidden="true"></i></a>
      </div-->
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