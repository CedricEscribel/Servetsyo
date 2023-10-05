
var map;

function initMap() {
  var mapLayer = document.getElementById("map-layer");
  var centerCoordinates = new google.maps.LatLng(14.9742, 120.8945);
  var defaultOptions = {
    center: centerCoordinates,
    zoom: 15
  }

  map = new google.maps.Map(mapLayer, defaultOptions);
}

function locate() {
  document.getElementById("btnAction").disabled = true;
  document.getElementById("btnAction").innerHTML = "Processing...";
  document.getElementById("CoordValid").hidden = true;
  if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var currentLatitude = position.coords.latitude;
      var currentLongitude = position.coords.longitude;

      var infoWindowHTML = "<h4>Current Location</h4>" + "Latitude: " + currentLatitude + "<br>Longitude: " + currentLongitude;
      var infoWindow = new google.maps.InfoWindow({
        map: map,
        content: infoWindowHTML
      });
      var currentLocation = {
        lat: currentLatitude,
        lng: currentLongitude
      };
      infoWindow.setPosition(currentLocation);
      document.getElementById("btnAction").style.display = 'none';
      document.getElementById('latitude').value = currentLatitude + "," + currentLongitude;

    });
  }
}

function Valid() {
    const inpObj = document.getElementById("latitude");
    if (!inpObj.checkValidity()) {
      document.getElementById("CoordValid").innerHTML = "Please pin your location";
      document.getElementById("CoordValid").hidden = false;
    } else {
      document.getElementById("CoordValid").innerHTML = "Input OK";
    }
  }