<aside id="sidebar" class="aside_content">
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>


<main id="content" class="main_content" > <!--class="main_full" -->
  {snippet:notices}
  {snippet:breadcrumbs}


  <div id="box-manufacturers" class="box">

    <h1 class="title"><?php echo language::translate('title_manufacturers_EC', 'Manufacturas'); ?></h1>

    <div class="manufacturers row half-  box-thumbnail">

      <?php foreach($manufacturers as $manufacturer) { ?>

        <div class="col-md-fourths thumbnail-content thumbnail-category">
          <div class="thumbnail">
            <a class="link" href="<?php echo htmlspecialchars($manufacturer['link']); ?>" title="<?php echo htmlspecialchars($manufacturer['name']); ?>">
              <div class="image-wrapper image-thumbnail">
                <img class="image img-responsive" src="<?php echo htmlspecialchars($manufacturer['image']['thumbnail']); ?>" srcset="<?php echo htmlspecialchars($manufacturer['image']['thumbnail']); ?> 1x, <?php echo htmlspecialchars($manufacturer['image']['thumbnail_2x']); ?> 2x" alt="<?php echo htmlspecialchars($manufacturer['name']); ?>" />
              </div>
              <div class="caption">
               <h3><i class="icon fa fa-caret-right flag-icon1 flip-right" aria-hidden="true"></i><?php echo $manufacturer['name']; ?></h3>
              </div>
            </a>
          </div>
        </div>

      <?php } ?>

    </div>
  </div>
</main>
