<aside id="sidebar" class="aside_content">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>


<main id="content" class="main_content">
  {snippet:notices}
  {snippet:breadcrumbs}

  <div id="box-manufacturer" class="box">
  <?php if ($products) { ?>
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
    <?php } ?>
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