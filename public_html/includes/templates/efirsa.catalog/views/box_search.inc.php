<div id="navigation">
      <div class="search">
      <?php echo functions::form_draw_form_begin('search_form', 'get', document::ilink('search')); ?>
      <?php echo functions::form_draw_search_field('query', true, 'placeholder="'. language::translate('text_search_products', 'Search products') .' …"'); ?>
    <?php echo functions::form_draw_form_end(); ?>
  </div>
  </div>