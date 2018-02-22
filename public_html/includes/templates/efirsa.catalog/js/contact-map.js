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

           