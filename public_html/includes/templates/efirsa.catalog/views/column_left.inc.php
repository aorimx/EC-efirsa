<div id="column-left" class="column_left">
<h1 class="titulos-banner">Tienda _</h1>

  <input id="mobile-menu-toggle" type="checkbox" style="display: none;" />

  <div class="content" style="display: block;">

    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_category_tree.inc.php'); ?>
  	<?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_manufacturer_logotypes.inc.php'); ?>
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_filter.inc.php'); ?>

    <!--<?php // include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_recently_viewed_products.inc.php'); ?>-->

    <!--<?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_account_links.inc.php'); ?>-->

  </div>
</div>