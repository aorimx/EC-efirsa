<div id="box-similar-products" class="box">

  <h2 class="title"><?php echo language::translate('title_similar_products_EC', 'Productos Similares'); ?></h2>

  <div class="products row half-gutter text-center">
    <?php foreach($products as $product) echo functions::draw_listing_product($product); ?>
  </div>

</div>
