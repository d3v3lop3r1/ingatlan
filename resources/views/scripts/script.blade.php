<script src="/js/jquery-3.2.0.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/simple.money.format.js"></script>
<script src="/js/lightbox.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
{{--  Money format  --}}
$('.money').simpleMoneyFormat();

tinymce.init({
    selector:'textarea',
    font_formats: 'Roboto, sans-serif',
    plugins: "template table lists fullscreen hr link preview print casechange visualblocks",
    menubar: "file insert table ",
    toolbar1: "template|fontselect forecolor fontsizeselect|alignleft aligncenter alignright| table bullist",
    toolbar2: "undo redo fullscreen preview hr|h1 h2 h3 h4|link print casechange visualblocks",
    fontsize_formats: '10px 12px 14px 16px 18px 20px 22px 24px',
    invalid_styles: 'font-family',
    block_formats: 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3; Header 4=h4',
    color_map: [
    "000000", "Black",
    "808080", "Gray",
    "FFFFFF", "White",
    "FF0000", "Red",
    "FFFF00", "Yellow",
    "008000", "Green",
    "0000FF", "Blue"
  ],
    content_css : '/css/myLayoutTynimce.css',
    forced_root_block : 'p',
    language: 'hu_HU',
    language_url : '/tinymce/languages/hu_HU.js',
    height: 300,
    templates: "/templates/templates.php",


});




// Google Map
/*
        var customLabel = {
          berles: {
            label: 'B'
          },
          eladas: {
            label: 'E'
          }
        };

          function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(46.0727345, 18.232266),
            zoom: 10
          });
          var infoWindow = new google.maps.InfoWindow;

            // Change this depending on the name of your PHP or XML file
            downloadUrl('https://ingatlanfox.hu/map_xml.php', function(data) {
              var xml = data.responseXML;
              var markers = xml.documentElement.getElementsByTagName('marker');
              Array.prototype.forEach.call(markers, function(markerElem) {
                var name = markerElem.getAttribute('header');
                var address = markerElem.getAttribute('address');
                var type = markerElem.getAttribute('type');
                var point = new google.maps.LatLng(
                    parseFloat(markerElem.getAttribute('lat')),
                    parseFloat(markerElem.getAttribute('lng')));

                var infowincontent = document.createElement('div');
                var strong = document.createElement('strong');
                strong.textContent = name
                infowincontent.appendChild(strong);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = address
                infowincontent.appendChild(text);
                var icon = customLabel[type] || {};
                var marker = new google.maps.Marker({
                  map: map,
                  position: point,
                  label: icon.label
                });

                marker.addListener('click', function() {
                  infoWindow.setContent(infowincontent);
                  infoWindow.open(map, marker);
                });
              });
            });
          }



        function downloadUrl(url, callback) {
          var request = window.ActiveXObject ?
              new ActiveXObject('Microsoft.XMLHTTP') :
              new XMLHttpRequest;

          request.onreadystatechange = function() {
            if (request.readyState == 4) {
              request.onreadystatechange = doNothing;
              callback(request, request.status);
            }
          };

          request.open('GET', url, true);
          request.send(null);
        }

        function doNothing() {} */
      </script>
      {{--  <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwZb4aGUFbjvzC39haEzjtH9XlA0djZsE&callback=initMap">
      </script>  --}}
