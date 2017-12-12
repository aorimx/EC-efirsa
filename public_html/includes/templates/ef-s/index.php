<?php require 'header.php';?>

  <link href="dist/lity.css" rel="stylesheet"/>
  <script src="dist/lity.js"></script>
  <script>
      $(function() {
          $('a.land').each(function() {
              var el = $(this), href = el.attr('href');

              if (href.length > 97) {
                  href = href.substr(0, 97) + '...';
              }

              el.text(href);
          })
      });
  </script>

  <div class="container-fluid">
    <div class="row">
      <div class="video-landing">
        <video muted id="preview-youtube" autoplay="" loop="">
    		  <source src="video/preview.mp4" type="video/mp4">
              Su navegador no soporta la etiqueta de vídeo.
    		</video>
        <a href="http://efirsa.mx/archivos/efirsaInstitucional.mp4" data-lity><img id="play-video" class="play_button_landing" src="img/play.png"></a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row separador-logo">
      <img class="centrar-img efirsa-home" src="img/logos/logoIndex.png">
    </div>
  </div>



<div class="container">
  <div class="row seccion-productos">
    <div class="padding-home">
      <h2 class="titulos-secciones">Productos</h2>
      <p class="texto-verde enlaces-verdes"><a target="_blank" class="texto-verde enlaces-verdes" href="archivos/catalogoEfirsa.pdf">Descargar nuestro catálogo<img class="flecha-enlace" src="img/flecha-verde.png"></a></p>
    </div>
    <!--<img class="img-full" src="img/cintillo-catalogo.jpg">-->
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
      <li><a href="#"><img src="data1/images/slider1x.png" alt="Slider" title="slider-1" id="wows1_0"/></a></li>
      <li><img src="data1/images/slider2x.png" alt="slider-2" title="slider-2" id="wows1_1"/></li>
      <li><img src="data1/images/slider3x.png" alt="slider-3" title="slider-3" id="wows1_2"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
      <a href="#" title="slider-1"><span>1</span></a>
      <a href="#" title="slider-2"><span>2</span></a>
      <a href="#" title="slider-3"><span>3</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://efirsa.mx"></a> by Efirsa</div>
    <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>

    <?php /* ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <img src="img/slider-1.png" alt="Efirsa Web Slider" style="width:100%;">
          <!--<div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
          </div>-->
        </div>

        <div class="item">
          <img src="img/slider-2.png" alt="Efirsa Web Slider" style="width:100%;">
          <!--<div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>-->
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <?php */ ?>
  </div>
</div>

  <div class="container">

    <div class="row seccion-servicios">
      <div class="padding-home">
        <h2 class="texto-centro titulos-secciones" style="letter-spacing: 2px;">Servicios</h2>
      </div>
    </div>
  </div>
  <div class="gris-mantenimiento ">
    <div class="container gris-mantenimiento service-flex">
      <div class="servicesInicio">
        <div class="col-xs-12 col-sm-3 sin-padding serviceResp">
          <div class="contenedor-servicios">
            <h2 class="servicios-item">Venta _</h2>
          </div>
          <img src="img/servicios/Venta.png" alt="">
        </div>
        <div class="col-xs-12 col-sm-3 sin-padding serviceResp">
          <div class="contenedor-servicios">
            <h2 class="servicios-item">Mantenimiento _</h2>
          </div>
          <img src="img/servicios/Mantenimiento.png" alt="">
        </div>
        <div class="col-xs-12 col-sm-3 sin-padding serviceResp">
          <div class="contenedor-servicios ">
            <h2 class="servicios-item">Modernización _</h2>
          </div>
          <img src="img/servicios/Modernizacion.png" alt="">
        </div>
        <div class="col-xs-12 col-sm-3 sin-padding serviceResp">
          <div class="contenedor-servicios">
            <h2 class="servicios-item">Reparación _</h2>
          </div>
          <img src="img/servicios/Reparacion.png" alt="">
        </div>
      </div>
      <h2 class="textService">DE ELEVADORES DE USO <span class="strong">DOMÉSTICO E INDUSTRIAL</span></h2>
    </div>
  </div>
  <div class="container">
    <div class="row seccion-pasos-cotizacion">
      <div class="padding-home">
        <p class="texto-centro"><a class="texto-verde enlaces-verdes" href="cotizaciones.php">Pasos a seguir para una cotización <img class="flecha-enlace" src="img/flecha-verde.png"></a></p>
      </div>
    </div>
  </div>
  <center>
    <div class="hero-image">
      <div class="hero-text">
        <h2 class="hero-mexico-txt">HECHO <b class="fwHero">DE MÉXICO</b></h2>
        <p class="hero-originarios">ORIGINARIOS DE GUADALAJARA, JALISCO.</p>
     
      </div>
    </div>
  </center>
<?php require 'footer.php';?>
