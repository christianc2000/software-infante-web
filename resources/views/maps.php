<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #map{
            height: 100%;
        }

        html,body{
            height: 100%;
            margin:0;
            padding:0;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <h2>How to Add Google Map in Laravel? - ItSolutionStuff.com</h2>
        <div id="map"></div>
    </div>
  
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello Rajkot!",
          });
        }
  
        window.initMap = initMap;
    </script>
  
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyAl8DaopxOLYwyY0gJV2fUky4_X99ZFwJY&callback=initMap" ></script>
</body>
</html>