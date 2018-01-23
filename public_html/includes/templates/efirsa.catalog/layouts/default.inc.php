<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<meta name="description" content="{snippet:description}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
<link rel="stylesheet" href="{snippet:template_path}css/font-awesome.min.css">
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/styles/main.css">
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/slick/slick.css"/>
<link rel="stylesheet" href="{snippet:template_path}Sagan-boilerplate/assets/slick/slick-theme.css"/>
</head>
<body>
<div id="page">
  <header>
    <div id="region-wrapper">
      <!--<?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_region.inc.php'); ?>-->
    </div>
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_cart.inc.php'); ?>
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . '/layouts/menu.php'); ?>
  </header>
  <!--<?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_site_menu.inc.php'); ?>-->
    <main class="j-workspace ">
      <div class="top">
        {snippet:top}
      </div>
      <div class="j-wrap">
        <div class="middle-content">
          {snippet:content}
          <div style="clear: both;"></div>
        </div>
      </div>
      <div class="bottom">
        {snippet:bottom}
      </div>
    </main>
     <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . '/layouts/footer.php'); ?>
</div>
<!--<a id="scroll-up" href="#">
  <?php //echo functions::draw_fonticon('fa-chevron-circle-up fa-3x', 'style="color: #000;"'); ?>
</a>-->
{snippet:foot_tags}
<script src="{snippet:template_path}js/app.min.js"></script>
<script src="{snippet:template_path}Sagan-boilerplate/assets/slick/slick.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{snippet:template_path}js/mobilMenu.js"></script>
<script src="{snippet:template_path}js/bootstrap.js"></script>
<script src="{snippet:template_path}js/scripts.js"></script>
<script src="{snippet:template_path}js/bar-order-by.js"></script>
<script src="{snippet:template_path}Sagan-boilerplate/assets/scripts/aside-categories.js"></script>
<script src="{snippet:template_path}js/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="{snippet:template_path}Sagan-boilerplate/assets/scripts/prueba.js"></script>
{snippet:javascript}
</body>
</html>