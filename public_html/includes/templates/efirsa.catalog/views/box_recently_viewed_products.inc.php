<?php if(!empty($products)){ ?>
  <div id="box-recently-viewed-products" class="box-recently_viewed">

    <h2><?php echo language::translate('title_recently_viewed_EC', 'Vistos recientemente'); ?></h2>

    <div class="box-thumbnail">

      <?php foreach ($products as $product) { ?>
      <div class="thumbnail-content">
        <a href="<?php echo htmlspecialchars($product['link']); ?>"<?php echo !empty(document::$settings['product_modal_window']) ? ' data-toggle="lightbox"' : ''; ?>>
          <img class="image-thumbnail" src="<?php echo htmlspecialchars($product['thumbnail']); ?>" alt="" />
          </a>
        </div>
      <?php } ?>

    </div>
  </div>
<?php }?>
