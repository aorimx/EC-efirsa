<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<meta name="description" content="{snippet:description}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
{snippet:head_tags}
  <link rel="stylesheet" href="{snippet:template_path}css/framework.min.css" />
  <link rel="stylesheet" href="{snippet:template_path}css/app.min.css" />
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/normalize.css" />
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/bootstrap.css">
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/font-awesome.min.css">
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/certificaciones.css">
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/inicio.css">
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/mobileMenu.css">
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/nosotros.css">
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/contacto.css">
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/estilos.css">
  <link rel="stylesheet" href="{snippet:template_path}ef-s/css/style1.css">
{snippet:style}

</head>
<body>

<div id="page" class="twelve-eighty shadow">

  <header>
    <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'ef-s/menu.php'); ?>
  </header>

  <!--<?php //include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_site_menu.inc.php'); ?>-->

  <div id="main">
    <div class="top">
      {snippet:top}
    </div>

    <div class="middle">

      {snippet:content}

      <div style="clear: both;"></div>
    </div>

    <div class="bottom">
      {snippet:bottom} 
    </div>
  </div>

  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'ef-s/footer.php'); ?>
</div>

<a id="scroll-up" href="#">
  <?php echo functions::draw_fonticon('fa-chevron-circle-up fa-3x', 'style="color: #000;"'); ?>
</a>

{snippet:foot_tags}
<script src="{snippet:template_path}js/app.min.js"></script>
{snippet:javascript}
</body>
</html>