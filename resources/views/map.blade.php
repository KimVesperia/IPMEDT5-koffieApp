<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <?php
     $ch = curl_init();

     curl_setopt($ch, CURLOPT_URL, "https://hardware1234.data.thethingsnetwork.org/api/v2/query?last=3m");
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


     $headers = array();
     $headers[] = "Accept: application/json";
     $headers[] = "Authorization: key ttn-account-v2.4QiUVWd-AS9c659IB6mk2RLwOe7NlrHpmNVZgcHfx5E";
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

     $result = curl_exec($ch);
     if (curl_errno($ch)) {
         echo 'Error:' . curl_error($ch);
     }

     curl_close ($ch);

     $response = json_decode($result, true);

     $coordinates = $response[0]["location"];
     $filter1 = 'map';
     $replace1 = str_replace($filter1, "", $coordinates);

     $filter2 = '[';
     $replace2 = str_replace($filter2, "", $replace1);

     $filter3 = ']';
     $replace3 = str_replace($filter3, "", $replace2);

     $filter4 = 'latitude:';
     $replace4 = str_replace($filter4, "", $replace3);

     $filter5 = 'longitude:';
     $replace5 = str_replace($filter5, "", $replace4);

     $superReplace = $replace5;
     $divRemove = explode(" ", $superReplace);

     if ($superReplace == '-677.7216 -677.7216') {
       echo $long = 4.4852;
       echo '<br>';
       echo 'GPS heeft geen verbinding.';
       echo '<br>';
       echo $lat = 52.1681;
     } elseif (empty($result)){
       echo $long = 4.4852;
       echo '<br>';
       echo 'GPS is offline';
       echo '<br>';
       echo $superReplace;
       echo '<br>';
       echo $lat = 52.1681;
     }
     else {
       echo $long = $divRemove[0];
       echo '<br>';
       echo 'Verbinding!!!';
       echo '<br>';
       echo $superReplace;
       echo '<br>';
       echo $lat = trim($divRemove[1], "()");
     }

     ?>
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 19
        });
        infoWindow = new google.maps.InfoWindow;

        var longJS = <?php echo $long; ?>;
        var latJS = <?php echo $lat; ?>;

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lng: longJS,
              lat: latJS

             //  lat: position.coords.latitude,
             // lng: position.coords.longitude
            };
            console.log(pos);
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6bti9gZhcVbI3lRuFJadMhVQDs9T-978&callback=initMap">
    </script>
  </body>
</html>
