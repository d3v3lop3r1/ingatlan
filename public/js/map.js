 
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
        pos_lat = Number(address.map_lat);
        pos_long = Number(address.map_long);
        return new google.maps.Marker({
          position: {lat:pos_lat,lng:pos_long},
          map: map
        });
      });          
        
    }





