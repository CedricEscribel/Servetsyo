<?php 

require_once '../phpconfig/rescue.php';

session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

include "../log/session.php";
$user = getUserById($_SESSION['user_id'], $conn);
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
	background: #3878c7;
    padding: 10px 40px;
    border: #3672bb 1px solid;
    border-radius: 2px;
    color: #FFF;
    font-size: 0.9em;
    cursor:pointer;
    display:block;
}

</style>

<!-- Schedule form start -->
     <div class="Schedule_form">
          <h1>Artificial Insemination</h1>

        <form method="post" action="../phpconfig/rescue.php">
          <div class="form">
          <label for="name">Name:</label>
          <input type="text" id="name" name="Name" placeholder="<?=$user['Fullname']?>">
  
          <label for="Number">Contact Number</label>
          <input type="text" id="number" name="ContactNum" placeholder="<?=$user['PhoneNum']?>">


          <h1>Get Location</h1>
          <div id="button-layer"><button id="btnAction" onClick="locate()">My Current Location</button></div>
          <div id="map-layer"></div>
          <label for="Details">Details:</label>
          <textarea id="Details" name="Details" placeholder="Additional details"></textarea>

			  	<input type="submit" name="save" value="Submit">
          </div>
        </form>
      </div>
            </div>
    <!-- Schedule form end -->

    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->

    <!-- Script maps -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap"
        async defer></script>
      <script type="text/javascript">
      var map;
      function initMap() {
        var mapLayer = document.getElementById("map-layer");
        var centerCoordinates = new google.maps.LatLng(37.6, -95.665);
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
          });
        }
      }
      </script>
    <!-- Script Maps End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
    <!-- Template Javascript --> 

</body>

<?php }else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "../login.php";</script>';
} ?>