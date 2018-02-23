<aside id="sidebar" class="aside_content">
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>



<main id="content" class="main_content main-content-padding" > <!--class="main_full" -->
  {snippet:notices}
  <!--{snippet:breadcrumbs}-->
  <div class="container-search-title">
    <h1 class="categories-title"><?php echo language::translate('title_categories_EC', 'Categorias'); ?></h1>
      <div class="content-search">
        <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/box_search.inc.php'); ?>
      </div>
</div>
  <div id="box-categories" class="box">
    <div class="box-thumbnail">
      <?php if(!empty($categories)){ ?>
        <?php foreach ($categories as $category) echo functions::draw_listing_category($category); ?>
      <?php }else{ ?>
        Por el momento no hay categorias que mostrar
      <?php } ?>
    </div>
  </div>
</main>
