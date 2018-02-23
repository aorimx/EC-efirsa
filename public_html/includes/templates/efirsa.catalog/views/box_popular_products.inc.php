<div id="box-popular-products">
<h1 class="padding-left">Productos mas populares</h1>
  <div class="products row half-gutter text-center box-thumbnail">
    <?php foreach($products as $product) echo functions::draw_listing_product($product); ?>
  </div>

</div>
