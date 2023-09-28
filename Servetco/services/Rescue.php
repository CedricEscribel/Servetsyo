<?php 

require_once '../phpconfig/rescue.php';
define("API_KEY","")
?>

<head>
    <meta charset="utf-8">
    <title>Rescue </title>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="../css/Schedule.css">
    <link rel="stylesheet" href="../scss/dropdown.css">
    <!-- Navbar End -->


    <style>
#map-layer {
	margin: 20px 0px;
	max-width: 600px;
	min-height: 400;
}
#btnAction {
	background: #7AB730;
    padding: 10px 40px;
    border: #93EA29 1px solid;
    border-radius: 2px;
    color: #FFF;
    font-size: 0.9em;
    cursor:pointer;
    display:block;
}

#button-layer{
  display: flex;
  justify-content: center;
}
</style>
<!-- Schedule form start -->
     <div class="Schedule_form">
          <h1>Animal Rescue</h1>

        <form method="post" action="../phpconfig/rescue.php">
          <div class="form">
          <label for="name">Name:</label>
          <input type="text" id="name" name="Name" placeholder="Your name" required>
  
          <label for="Number">Contact Number</label>
          <input type="tel" name="ContactNum"  placeholder="09123456789" required pattern="[0-9]{11}" maxlength="11">
            
          <label for="Animal">Select what kind of animals</label>
          <select class="dropbtn" name="animal" required>
                <option value="">Please Select</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
            </select>  

            <input type="text" name="Coordinates" required id="latitude" hidden >

            <label for="Location">Get Location:</label>
              <div id="button-layer"><button id="btnAction" onClick="locate()">Pin current location</button></div>
              <div id="map-layer"></div>
          <label for="Situation">Situation:</label>
          <textarea id="Situation" name="Details" required placeholder="Explain the situation"></textarea>

			  	<input type="submit" name="save" value="Submit">
          </div>

        </form> 
      </div>
            </div>
    <!-- Schedule form end -->

    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap"
        async defer></script>
      <script type="text/javascript">
      var map;
      function initMap() {
        var mapLayer = document.getElementById("map-layer");
        var centerCoordinates = new google.maps.LatLng(14.9742, 120.8945);
        var defaultOptions = { center: centerCoordinates, zoom: 15 }

        map = new google.maps.Map(mapLayer, defaultOptions);
      }

      function locate(){
        document.getElementById("btnAction").disabled = true;
        document.getElementById("btnAction").innerHTML = "Processing...";
        if ("geolocation" in navigator){
          navigator.geolocation.getCurrentPosition(function(position){ 
            var currentLatitude = position.coords.latitude;
            var currentLongitude = position.coords.longitude;

            var infoWindowHTML = "<h3>Current Location</h3>"+"Latitude: " + currentLatitude + "<br>Longitude: " + currentLongitude;
            var infoWindow = new google.maps.InfoWindow({map: map, content: infoWindowHTML});
            var currentLocation = { lat: currentLatitude, lng: currentLongitude };
            infoWindow.setPosition(currentLocation);
            document.getElementById("btnAction").style.display = 'none';
            document.getElementById('latitude').value = currentLatitude + "," + currentLongitude;
            
          });
        }
      }
      </script>

</body>
