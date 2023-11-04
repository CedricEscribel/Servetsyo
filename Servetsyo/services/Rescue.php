<?php

require_once '../phpconfig/rescue.php';
define("API_KEY", "")
?>

<head>
  <meta charset="utf-8">
  <title>Rescue </title>
  <link rel="icon" href="../img/icon.png" type="image/x-icon">

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
      cursor: pointer;
      display: block;
    }

    #button-layer {
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
        <input type="text" id="name" class="form-control" name="Name" placeholder="Your name" required>

        <label for="Number">Contact Number</label>
        <input type="tel" name="ContactNum" class="form-control" placeholder="09123456789" required pattern="[0-9]{11}" maxlength="11">

        <label for="Animal" style="margin-top: 15px;">Select what kind of animals</label>
        <select class="dropbtn" id="animal" class="form-select" name="animal" required>
          <option value="">Please Select</option>
          <option value="Dog">Dog</option>
          <option value="Cat">Cat</option>
          <option value="other">Other</option>
        </select>
        <input type="text" id="customAnimal" name="animal" style="display: none;" placeholder="State Animal ">


        <input type="text" name="Coordinates" required id="latitude" hidden>

        <label for="Location" style="margin-top: 15px;">Get Location:</label>
        <div id="button-layer"><button id="btnAction" onClick="locate()">Pin current location</button></div>
        <p id="CoordValid" class="alert alert-danger" role="alert" hidden></p>
        <div id="map-layer"></div>
        <label for="Situation">Situation:</label>
        <textarea id="Situation" name="Details" class="form-control" placeholder="Explain the situation"></textarea>

        <input type="submit" name="save" onclick="Valid()" value="Submit">
      </div>

    </form>
  </div>
  </div>
  <!-- Schedule form end -->
  <script>
    const selectElement = document.getElementById("animal");
    const customOptionInput = document.getElementById("customAnimal");

    selectElement.addEventListener("change", function() {
      if (selectElement.value === "other") {
        customOptionInput.style.display = "block";
      } else {
        customOptionInput.style.display = "none";
      }
    });
  </script>
  <!-- Footer Start -->
  <?php include "footer.php"; ?>
  <!-- Footer End -->
  <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap" async defer></script>
  </script>

  <script src="script.js"></script>




  </body>