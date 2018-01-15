<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<meta name="description" content="{snippet:description}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{snippet:template_path}css/font-awesome.min.css">
  <link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/styles/main.css">
</head>
<body>
  <div id="header-wrapper">
    <header id="header" class="twelve-eighty">
      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . '/layouts/menu.php'); ?>
      <!--<a class="logotype" href="<?php /*echo document::href_ilink(''); ?>">
        <img src="<?php echo WS_DIR_IMAGES; ?>logotype.png" style="max-width: 250px; max-height: 60px;" alt="<?php echo settings::get('store_name'); ?>" title="<?php echo settings::get('store_name'); ?>" />
      </a>

      <div class="customer-service hidden-xs">
        <div class="title"><?php echo language::translate('title_customer_service', 'Customer Service'); ?></div>
        <div class="phone"><?php echo settings::get('store_phone'); */?></div>
      </div>-->
    </header>
  </div>
  <div class="j-workspace">
    <div class="j-wrap">
      <div id="page" class="shadow">
        <div id="main">

         {snippet:content}

        </div>
      </div>
    </div>
  </div>
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . '/layouts/footer.php'); ?>
{snippet:foot_tags}
<script src="{snippet:template_path}js/app.min.js"></script>
<script src="{snippet:template_path}js/jquery.js"></script>
<script src="{snippet:template_path}js/mobilMenu.js"></script>
<script src="{snippet:template_path}js/bootstrap.min.js"></script>
<script src="{snippet:template_path}js/scripts.js"></script>
<script src="{snippet:template_path}Sagan-boilerplate/assets/scripts/checkout.js"></script>
{snippet:javascript}
</body>
</html>