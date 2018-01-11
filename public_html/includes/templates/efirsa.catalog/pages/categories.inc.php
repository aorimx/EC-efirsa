<main id="content">
  {snippet:notices}
  {snippet:breadcrumbs}
  <div id="box-categories" class="box">
    <h1 class="categories-title"><?php echo language::translate('title_categories', 'Categories'); ?></h1>
    <div class="box-thumbnail">
      <?php foreach ($categories as $category) echo functions::draw_listing_category($category); ?>
    </div>
  </div>
</main>