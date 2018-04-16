<main id="content" class="main_content" style="width:100%;">
  <div class=" c-mostrar alert-content">
    <div class="text-content">
      <p class="texto-verde"><a target="_blank" class="texto-verde" href="{snippet:template_path}archivos/LICENSE.pdf">Descargar nuestro catálogo</a></p>
    </div>
    <div class="botton-x">
      <button class="text-botton">X</button>
    </div>
  </div>
  <div class="hero-content">
    <div class="hero-image">
      <div class="hero-text">
        <h1>Lorem ipsum </h1>
        <p>dolor sit amet</p>
        <a href=""><button>Lorem ipsum</button></a>
      </div>
    </div>
  </div>
<?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente2.inc.php'); ?>
<?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente3.inc.php'); ?>
<div class="slider-content">
        <div class="clientes_slider">
          <h1>Nuestros <br>clientes _<h1/>
        </div>
        <div class="cita_texto">
          <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente6.inc.php'); ?>
      </div>
      </div>
<?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'pages/menusecundario.inc.php'); ?>
</main>
<script>
$(document).ready(function () {
       $('.text-botton').on('click', function () {
           $('.c-mostrar').toggleClass('c-oculto');
       });
   });
</script>
