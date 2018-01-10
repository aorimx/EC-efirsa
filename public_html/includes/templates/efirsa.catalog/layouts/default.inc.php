<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>Defualt{snippet:title}</title>
<meta charset="{snippet:charset}" />
<meta name="description" content="{snippet:description}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
{snippet:head_tags}
<link rel="stylesheet" href="{snippet:template_path}css/normalize.css" />
  <link rel="stylesheet" href="{snippet:template_path}css/bootstrap.css">
  <link rel="stylesheet" href="{snippet:template_path}css/font-awesome.min.css">
  <link rel="stylesheet" href="{snippet:template_path}css/certificaciones.css">
  <link rel="stylesheet" href="{snippet:template_path}css/inicio.css">
  <link rel="stylesheet" href="{snippet:template_path}css/mobileMenu.css">
  <link rel="stylesheet" href="{snippet:template_path}css/nosotros.css">
  <link rel="stylesheet" href="{snippet:template_path}css/estilos.css">
  <link rel="stylesheet" href="{snippet:template_path}css/style1.css">
  <link href="{snippet:template_path}Sagan-boilerplate/assets/styles/main.css" rel="stylesheet">
{snippet:style}
</head>
<body>

<div id="page" class="twelve-eighty shadow">

  <header id="header">

   

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

  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . '/layouts/footer.php'); ?>
</div>

</main>
<!--<a id="scroll-up" href="#">
  <?php //echo functions::draw_fonticon('fa-chevron-circle-up fa-3x', 'style="color: #000;"'); ?>
</a>-->

{snippet:foot_tags}
<script src="{snippet:template_path}js/app.min.js"></script>
<script src="{snippet:template_path}js/jquery.js"></script>
<script src="{snippet:template_path}js/mobilMenu.js"></script>
<script src="{snippet:template_path}js/bootstrap.min.js"></script>
<script src="{snippet:template_path}js/scripts.js"></script>
<script src="{snippet:template_path}Sagan-boilerplate/assets/scripts/aside-categories.js"></script>
<script src="{snippet:template_path}js/sweetalert2/dist/sweetalert2.all.min.js"></script>
{snippet:javascript}
</body>
</html>