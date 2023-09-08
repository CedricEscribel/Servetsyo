<?php 

require_once '../phpconfig/rescue.php';
define("API_KEY","")
?>

<head>
    <meta charset="utf-8">
    <title>Rescue </title>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="../css/Schedule.css">
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
          <input type="text" id="name" name="Name" required placeholder="Your name">
  
          <label for="Number">Contact Number</label>
          <input type="text" id="number" name="ContactNum" required placeholder="Contact Number">
            
          <label for="Animal">Select what kind of animals</label>
            <div required class="AnimalType form-check">
            <input class="form-check-input" type="checkbox" name="Animal[]" value="Dog" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Dog
            </label>
            <input class="form-check-input" type="checkbox" name="Animal[]" value="Cat" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                Cat
            </label>
            </div>

            <input type="text" name="Coordinates" required id="latitude" hidden>

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

            var infoWindowHTML = "Latitude: " + currentLatitude + "<br>Longitude: " + currentLongitude;
            var infoWindow = new google.maps.InfoWindow({map: map, content: infoWindowHTML});
            var currentLocation = { lat: currentLatitude, lng: currentLongitude };
            infoWindow.setPosition(currentLocation);
            document.getElementById("btnAction").style.display = 'none';
            document.getElementById('latitude').value = currentLatitude + "," + currentLongitude;
            
          });
        }
      }
      </script>
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>
