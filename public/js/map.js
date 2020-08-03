const formatter = new Intl.NumberFormat('hu-HU', {
    style: 'currency',
    currency: 'HUF',
    minimumFractionDigits: 0
  })
    var map;
    console.log(addresses);
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: {
               "lat" : 46.0776662,
               "lng" : 18.1885038
            }
    });

    var markers = addresses.map(function(address, i) {
        id = Number(address.id);
        price = "ár: "+formatter.format(address.price);
        pos_lat = Number(address.map_lat);
        pos_long = Number(address.map_long);
        title = String(address.header_hun+" - "+price);
        content = String(address.short_text_hun+"<strong>"+price+"</strong><br><br>"+"<a href='"+"/index/"+id+"'>id:"+(110000+id)+"</a>");
        const infowindow = new google.maps.InfoWindow({
            content
        });

        const marker = new google.maps.Marker({
        position: {lat:pos_lat,lng:pos_long},
        map,
        title
        });
        marker.addListener("click", () => {
            infowindow.open(map, marker);
          });

        return marker;
      });

    }





