<?php require 'header.php';?>
  <div class="container-fluid">
    <div class="row header-contacto bg-attach">
      <h1 class="titulos-banner">Contacto _</h1>
    </div>
  </div>
  <div class="container">
    <div class="row div-contacto">
      <div class="opciones">
        <div class="txtOpciones">
          <p class="txtEmpresa">EMPRESA</p>
          <p class="txtProfesionista">PROFESIONISTA</p>
        </div>
        <div class="linesOpciones">
          <hr class="sliderEmpresa">
          <hr class="sliderProfesionista">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6" style="overflow: hidden; padding-left: 0px; padding-right: 0px;">


        <div class="form-container marginHtc">
          <form id="contact-form" action="#" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="input-1">
                      <label for="" class="labelCont">Nombre del contacto*</label>
                      <input type="text" name="nombre" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Nombre de la empresa*</label>
                      <input type="text" name="nombre-empresa" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Puesto que tienes en la empresa*</label>
                      <input type="text" name="puesto-empresa" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Correo electrónico*</label>
                      <input type="email" name="email" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Teléfono</label>
                      <input type="number" name="telefono" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Asunto*</label>
                      <input type="text" name="asunto" placeholder="" autocomplete="off"  style="cursor:pointer; position:relative;"/><i class="fa fa-chevron-down" style="position:absolute; right:16px; top:40px; color:#959393;"></i>
                      <ul class="dropdow-select">
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Lorem ipsum," id="branding"/>
                            <label class="input-label cbe"  for="branding"></label>
                          </div>
                          <label class="text-label cbe" for="branding">Lorem ipsum</label>
                        </li>
                        <!--<li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Branding e Identidad Corporativa," id="branding"/>
                            <label class="input-label cbe" for="branding"></label>
                          </div>
                          <label class="text-label cbe" for="branding">Branding e Identidad Corporativa</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Desarrollo Web y Comercio en línea," id="web"/>
                            <label class="input-label cbe" for="web"></label>
                          </div>
                          <label class="text-label cbe" for="web">Desarrollo Web y Comercio en línea</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Desarrollo de Apps (Android y IOS)," id="apps"/>
                            <label class="input-label cbe" for="apps"></label>
                          </div>
                          <label class="text-label cbe" for="apps">Desarrollo de Apps (Android y IOS)</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Marketing Digital (Facebook, Instagram y Google)," id="mkt"/>
                            <label class="input-label cbe" for="mkt"></label>
                          </div>
                          <label class="text-label cbe" for="mkt">Marketing Digital (Facebook, Instagram y Google)</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Producción de Fotografía y Video," id="foto"/>
                            <label class="input-label cbe" for="foto"></label>
                          </div>
                          <label class="text-label cbe" for="foto">Producción de Fotografía y Video</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Cursos y Diplomados AORI," id="cursos"/>
                            <label class="input-label cbe" for="cursos"></label>
                          </div>
                          <label class="text-label cbe" for="cursos">Cursos y Diplomados AORI</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Deseo formar parte o hacer una alianza con AORI," id="alianza"/>
                            <label class="input-label cbe" for="alianza"></label>
                          </div>
                          <label class="text-label cbe" for="alianza">Deseo formar parte o hacer una alianza con AORI</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Quejas o Sugerencias," id="quejas"/>
                            <label class="input-label cbe" for="quejas"></label>
                          </div>
                          <label class="text-label cbe" for="quejas">Quejas o Sugerencias</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbe" type="checkbox" value="Otros," id="otros"/>
                            <label class="input-label cbe" for="otros"></label>
                          </div>
                          <label class="text-label cbe" for="otros">Otros</label>
                        </li>-->
                      </ul>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Mensaje*</label>
                      <textarea name="mensaje" placeholder=""></textarea>
                    </div>
                    <div class="input-1 btnI" style="">
                      <input class="btnI" type="submit" value="ENVIAR"/>
                    </div>
                    <div class="nota"><span>Los campos marcados con * son obligatorios</span></div>
          </form>
          <form id="contact-form-p" action="#" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="input-1">
                      <label for="" class="labelCont">Nombre del contacto*</label>
                      <input type="text" name="nombrep" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Nombre de tu profesión*</label>
                      <input type="text" name="profesion" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Estado</label>
                      <input type="text" name="estado" placeholder="" autocomplete="off" style="cursor:pointer; position:relative;"/><i class="fa fa-chevron-down" style="position:absolute; right:16px; top:40px; color:#959393;"></i>
                      <ul class="dropdow-selectEstado">
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Aguascalientes" id="Aguascalientes"/>
                          </div>
                          <label class="text-label est" for="Aguascalientes">Aguascalientes</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Baja California" id="BajaCalifornia"/>
                          </div>
                          <label class="text-label est" for="BajaCalifornia">Baja California</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Baja California Sur" id="BajaCaliforniaSur"/>
                          </div>
                          <label class="text-label est" for="BajaCaliforniaSur">Baja California Sur</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Campeche" id="Campeche"/>
                          </div>
                          <label class="text-label est" for="Campeche">Campeche</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Chiapas" id="Chiapas"/>
                          </div>
                          <label class="text-label est" for="Chiapas">Chiapas</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Chihuahua" id="Chihuahua"/>
                          </div>
                          <label class="text-label est" for="Chihuahua">Chihuahua</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Ciudad de México" id="CiudaddeMexico"/>
                          </div>
                          <label class="text-label est" for="CiudaddeMexico">Ciudad de México</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Coahuila" id="Coahuila"/>
                          </div>
                          <label class="text-label est" for="Coahuila">Coahuila</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Colima" id="Colima"/>
                          </div>
                          <label class="text-label est" for="Colima">Colima</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Durango" id="Durango"/>
                          </div>
                          <label class="text-label est" for="Durango">Durango</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Guanajuato" id="Guanajuato"/>
                          </div>
                          <label class="text-label est" for="Guanajuato">Guanajuato</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Guerrero" id="Guerrero"/>
                          </div>
                          <label class="text-label est" for="Guerrero">Guerrero</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Hidalgo" id="Hidalgo"/>
                          </div>
                          <label class="text-label est" for="Hidalgo">Hidalgo</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Jalisco" id="Jalisco"/>
                          </div>
                          <label class="text-label est" for="Jalisco">Jalisco</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="México" id="Mexico"/>
                          </div>
                          <label class="text-label est" for="Mexico">México</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Michoacán" id="Michoacan"/>
                          </div>
                          <label class="text-label est" for="Michoacan">Michoacán</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Morelos" id="Morelos"/>
                          </div>
                          <label class="text-label est" for="Morelos">Morelos</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Nayarit" id="Nayarit"/>
                          </div>
                          <label class="text-label est" for="Nayarit">Nayarit</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Nuevo León" id="NuevoLeon"/>
                          </div>
                          <label class="text-label est" for="NuevoLeon">Nuevo León</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Oaxaca" id="Oaxaca"/>
                          </div>
                          <label class="text-label est" for="Oaxaca">Oaxaca</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Puebla" id="Puebla"/>
                          </div>
                          <label class="text-label est" for="Puebla">Puebla</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Querétaro" id="Queretaro"/>
                          </div>
                          <label class="text-label est" for="Queretaro">Querétaro</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Quintana Roo" id="QuintanaRoo"/>
                          </div>
                          <label class="text-label est" for="QuintanaRoo">Quintana Roo</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="San Luis Potosí" id="SanLuisPotosi"/>
                          </div>
                          <label class="text-label est" for="SanLuisPotosi">San Luis Potosí</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Sinaloa" id="Sinaloa"/>
                          </div>
                          <label class="text-label est" for="Sinaloa">Sinaloa</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Sonora" id="Sonora"/>
                          </div>
                          <label class="text-label est" for="Sonora">Sonora</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Tabasco" id="Tabasco"/>
                          </div>
                          <label class="text-label est" for="Tabasco">Tabasco</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Tamaulipas" id="Tamaulipas"/>
                          </div>
                          <label class="text-label est" for="Tamaulipas">Tamaulipas</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Tlaxcala" id="Tlaxcala"/>
                          </div>
                          <label class="text-label est" for="Tlaxcala">Tlaxcala</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Veracruz" id="Veracruz"/>
                          </div>
                          <label class="text-label est" for="Veracruz">Veracruz</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Yucatán" id="Yucatan"/>
                          </div>
                          <label class="text-label est" for="Yucatan">Yucatán</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="est" type="radio" value="Zacatecas" id="Zacatecas"/>
                          </div>
                          <label class="text-label est" for="Zacatecas">Zacatecas</label>
                        </li>
                      </ul>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Correo electrónico*</label>
                      <input type="email" name="emailp" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Teléfono</label>
                      <input type="number" name="telefonop" placeholder=""/>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Asunto*</label>
                      <input type="text" name="asuntoP" placeholder="" autocomplete="off" style="cursor:pointer; position:relative;"/><i class="fa fa-chevron-down" style="position:absolute; right:16px; top:40px; color:#959393;"></i>
                      <ul class="dropdow-selectP">
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Lorem ipsum," id="brandingP"/>
                            <label class="input-label cbp"  for="brandingP"></label>
                          </div>
                          <label class="text-label cbp" for="brandingP">Lorem ipsum</label>
                        </li>
                       <!-- <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Branding e Identidad Corporativa," id="brandingP"/>
                            <label class="input-label cbp"  for="brandingP"></label>
                          </div>
                          <label class="text-label cbp" for="brandingP">Branding e Identidad Corporativa</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Desarrollo Web y Comercio en línea," id="webP"/>
                            <label class="input-label cbp" for="webP"></label>
                          </div>
                          <label class="text-label cbp" for="webP">Desarrollo Web y Comercio en línea</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Desarrollo de Apps (Android y IOS)," id="appsP"/>
                            <label class="input-label cbp" for="appsP"></label>
                          </div>
                          <label class="text-label cbp" for="appsP">Desarrollo de Apps (Android y IOS)</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Marketing Digital (Facebook, Instagram y Google)," id="mktP"/>
                            <label class="input-label cbp" for="mktP"></label>
                          </div>
                          <label class="text-label cbp" for="mktP">Marketing Digital (Facebook, Instagram y Google)</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Producción de Fotografía y Video," id="fotoP"/>
                            <label class="input-label cbp" for="fotoP"></label>
                          </div>
                          <label class="text-label cbp" for="fotoP">Producción de Fotografía y Video</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Cursos y Diplomados AORI," id="cursosP"/>
                            <label class="input-label cbp" for="cursosP"></label>
                          </div>
                          <label class="text-label cbp" for="cursosP">Cursos y Diplomados AORI</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Deseo formar parte o hacer una alianza con AORI," id="alianzaP"/>
                            <label class="input-label cbp" for="alianzaP"></label>
                          </div>
                          <label class="text-label cbp" for="alianzaP">Deseo formar parte o hacer una alianza con AORI</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Quejas o Sugerencias," id="quejasP"/>
                            <label class="input-label cbp" for="quejasP"></label>
                          </div>
                          <label class="text-label cbp" for="quejasP">Quejas o Sugerencias</label>
                        </li>
                        <li>
                          <div class="checkbox">
                            <input class="cbp" type="checkbox" value="Otros," id="otrosP"/>
                            <label class="input-label cbp" for="otrosP"></label>
                          </div>
                          <label class="text-label cbp" for="otrosP">Otros</label>
                        </li>-->
                      </ul>
                    </div>
                    <div class="input-1">
                      <label for="" class="labelCont">Mensaje*</label>
                      <textarea name="mensajep" placeholder=""></textarea>
                    </div>
                    <div class="input-1 btnI" style="">
                      <input class="btnI" type="submit" value="ENVIAR"/>
                    </div>
                    <div class="nota"><span>Los campos marcados con * son obligatorios</span></div>
          </form>       
        </div>



      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6" style="padding-left: 24px; padding-top: 24px;">
         <div id="map"></div>

         
         <script type="text/javascript">

           var map;
           var marker;

           function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 16,
               // set the zoom level manually
               disableDefaultUI:true,
               scaleControl: false,
               scrollwheel: true,
               center: {lat: 20.6541449, lng: -103.379492},
               styles: [
                          {
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#f5f5f5"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.icon",
                            "stylers": [
                              {
                                "visibility": "off"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#616161"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                              {
                                "color": "#f5f5f5"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative.land_parcel",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#bdbdbd"
                              }
                            ]
                          },
                          {
                            "featureType": "landscape.man_made",
                            "elementType": "geometry.fill",
                            "stylers": [
                              {
                                "color": "#dfdfdf"
                              }
                            ]
                          },
                          {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#eeeeee"
                              }
                            ]
                          },
                          {
                            "featureType": "poi",
                            "elementType": "labels.icon",
                            "stylers": [
                              {
                                "saturation": -100
                              },
                              {
                                "lightness": 15
                              },
                              {
                                "visibility": "on"
                              }
                            ]
                          },
                          {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.medical",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#e5e5e5"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#e5e5e5"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#9e9e9e"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.school",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#e5e5e5"
                              }
                            ]
                          },
                          {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#ffffff"
                              }
                            ]
                          },
                          {
                            "featureType": "road.arterial",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#dadada"
                              }
                            ]
                          },
                          {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                              {
                                "color": "#cdcdcd"
                              }
                            ]
                          },
                          {
                            "featureType": "road.highway",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#616161"
                              }
                            ]
                          },
                          {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#9e9e9e"
                              }
                            ]
                          },
                          {
                            "featureType": "transit.line",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#e5e5e5"
                              }
                            ]
                          },
                          {
                            "featureType": "transit.station",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#eeeeee"
                              }
                            ]
                          },
                          {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#c9c9c9"
                              }
                            ]
                          },
                          {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#9e9e9e"
                              }
                            ]
                          }
                        ]
             });
           
          
             var image = 'http://efirsa.mx/images/iconoMarker2.svg';

            marker = new google.maps.Marker({
               map: map,
              
               icon: image,
               position: {lat: 20.6534149, lng: -103.3800896}
             });
            
           }

           

         </script>
         <script async defer
           src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDacDTJIvueZB9g-8matbFeGYyroNeNnxQ&callback=initMap">
         </script>
      </div>
    </div>
  </div>
  
  <script src="js/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
  <script src="js/sliderForm.js"></script>
  <script src="js/enviarForm.js"></script>
  <script>
      $("input[name='asunto']").click(function(){
      	$('.dropdow-select').toggleClass('active');
      });
      $('input').click(function(){
      	if($(this).attr('name')!="asunto" && $(this).attr('type')!="checkbox")
      		$('.dropdow-select').removeClass('active');
      });
      $('.cbe').click(function(){
      	var val=$('input[name="asunto"]').val();
      	if($(this).is(':checked')){
      		$('input[name="asunto"]').val(val + $(this).val());
      	}
      	else{
      		val=val.replace($(this).val(),"");
      		$('input[name="asunto"]').val(val);
      
      	}
      	
      });
      
      $('#contact-form').submit(function(e){
      	e.preventDefault();
      	$('input').removeClass('error');
      	$('textarea').removeClass('error');
      	$('label.error').remove();
      	var name=$("input[name='nombre']");
        var empresa=$("input[name='nombre-empresa']");
        var puesto=$("input[name='puesto-empresa']");
      	var asunto=$("input[name='asunto']");
      	var mensaje=$("textarea[name='mensaje']");
      	var email=$("input[name='email']");
      	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      	if(name.val() === ""){
      		$(name).addClass('error');
      		$(name).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(empresa.val() === ""){
      		$(empresa).addClass('error');
      		$(empresa).after('<label class="error"> Campo obligatorio</label>');
        }
        if(puesto.val() === ""){
      		$(puesto).addClass('error');
      		$(puesto).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(asunto.val() === ""){
      		$(asunto).addClass('error');
      		$(asunto).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(mensaje.val() === ""){
      		$(mensaje).addClass('error');
      		$(mensaje).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(!pattern.test(email.val())){
      		$(email).addClass('error');
      		$(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');				
      	}
      	if($('label.error').length == 0){
          console.log("se enviara un correo");
          contactoEnviarMensajeBtn_click();
          contactoEnviarDatos();
      	}
      

          return false;
      });
  </script>
  <script>
       $("input[name='estado']").click(function(){
      	$('.dropdow-selectEstado').toggleClass('active');
      });
      $('input').click(function(){
      	if($(this).attr('name')!="estado" && $(this).attr('type')!="checkbox")
      		$('.dropdow-selectEstado').removeClass('active');
      });
      $('.est').click(function(){
        console.log("se apreto");
      	var val=$('input[name="estado"]').val();
      	if($(this).is(':checked')){
      		$('input[name="estado"]').val($(this).val());
      	}
      	else{
      		val=val.replace($(this).val(),"");
      		$('input[name="estado"]').val(val);
      
      	}
      	
      });


      $("input[name='asuntoP']").click(function(){
      	$('.dropdow-selectP').toggleClass('active');
      });
      $('input').click(function(){
      	if($(this).attr('name')!="asuntoP" && $(this).attr('type')!="checkbox")
      		$('.dropdow-selectP').removeClass('active');
      });
      $('.cbp').click(function(){
        console.log("se apreto");
      	var val=$('input[name="asuntoP"]').val();
      	if($(this).is(':checked')){
      		$('input[name="asuntoP"]').val(val + $(this).val());
      	}
      	else{
      		val=val.replace($(this).val(),"");
      		$('input[name="asuntoP"]').val(val);
      
      	}
      	
      });
      
      $('#contact-form-p').submit(function(e){
      	
      	e.preventDefault();
      	$('input').removeClass('error');
      	$('textarea').removeClass('error');
      	$('label.error').remove();
      	var name=$("input[name='nombrep']");
        var profesion=$("input[name='profesion']");
        
      	var asunto=$("input[name='asuntoP']");
      	var mensaje=$("textarea[name='mensajep']");
      	var email=$("input[name='emailp']");
      	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      	if(name.val() === ""){
      		$(name).addClass('error');
      		$(name).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(profesion.val() === ""){
      		$(profesion).addClass('error');
      		$(profesion).after('<label class="error"> Campo obligatorio</label>');
        }
        
      	if(asunto.val() === ""){
      		$(asunto).addClass('error');
      		$(asunto).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(mensaje.val() === ""){
      		$(mensaje).addClass('error');
      		$(mensaje).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(!pattern.test(email.val())){
      		$(email).addClass('error');
      		$(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');				
      	}
      	if($('label.error').length == 0){
          console.log("se enviara un correo");
          contactoEnviarMensajeBtnP_click();
          contactoEnviarDatosP();

      		//$('#contact-form').unbind('submit').submit();
      	}
      

          return false;
      });
  </script>
    
<?php require 'footer.php';?>
