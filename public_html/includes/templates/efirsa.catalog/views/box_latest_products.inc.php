<div id="box-latest-products">
  <h1 style="padding-left: 16px;">Products</h1>
  <div class="products row half-gutter text-center box-thumbnail">
    <?php foreach($products as $product) echo functions::draw_listing_product($product); ?>
  </div>

</div>
