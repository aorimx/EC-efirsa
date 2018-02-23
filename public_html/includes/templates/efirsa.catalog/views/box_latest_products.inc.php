<div id="box-latest-products">
  <h1 class="padding-left">Productos</h1>
  <div class="products row half-gutter text-center box-thumbnail">
    <?php foreach($products as $product) echo functions::draw_listing_product($product); ?>
  </div>

</div>
