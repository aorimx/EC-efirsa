{snippet:notices}

<div id="view-full-page" style="padding-right: 32px;">
  <a href="<?php echo htmlspecialchars($link); ?>"><?php echo language::translate('text_view_full_page_EC', 'Ver en página completa'); ?> <?php echo functions::draw_fonticon('fa-external-link'); ?></a>
</div>

{snippet:breadcrumbs}

<?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/box_product.inc.php'); ?>
