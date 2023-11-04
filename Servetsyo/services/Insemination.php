<?php

require_once '../phpconfig/ArtInsem.php';

session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

  include "../log/session.php";
  $user = getUserById($_SESSION['user_id'], $conn);
  define("API_KEY", "")
?>

  <?php if ($_SESSION['RoleType'] == 'user') { ?>

    <head>
      <meta charset="utf-8">
      <title>Artificial Insemination </title>
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
        <h1>Artificial Insemination</h1>

        <form method="post" action="../phpconfig/ArtInsem.php">
          <div class="form">
            <select class="Hide" name="user_id" style="display: none;">
              <option value="<?= $user['user_id'] ?>"></option>
            </select>

            <select class="Hide" name="Name" style="display: none;">
              <option value="<?= $user['Fullname'] ?>"></option>
            </select>

            <select class="Hide" name="ContNum" style="display: none;">
              <option value="<?= $user['PhoneNum'] ?>"></option>
            </select>

            <label for="name">Name:</label>
            <input type="text" id="name" name="Name" value="<?= $user['Fullname'] ?>" disabled>

            <label for="Number">Contact Number</label>
            <input type="text" name="ContNum" placeholder="<?= $user['PhoneNum'] ?>" disabled>

            <label for="AnimalKind">Kind of Animal</label>
            <select class="dropbtn" id="Animal" name="Animal" required>
              <option value="">Choose Animal</option>
              <option value="Carabao">Carabao</option>
              <option value="Cow">Cow</option>
              <option value="Goat">Goat</option>
              <option value="other">other</option>
            </select>
            <input type="text" id="customAnimal" name="Animal" style="display: none;" placeholder="State Animal ">


            <br>
            <input type="text" name="Coordinates" id="latitude" hidden required>

            <label for="Location">Get Location:</label>
            <div id="button-layer"><button id="btnAction" onClick="locate()" require>Pin current location</button></div>
            <p id="CoordValid" class="alert alert-danger" role="alert" hidden></p>
            <div id="map-layer"></div>
            <label for="Details">Details:</label>
            <textarea id="Details" name="Details" placeholder="Additional details"></textarea>

            <input type="submit" name="save" onclick="Valid()" value="Submit">
          </div>
        </form>
      </div>
      </div>
      <!-- Schedule form end -->

      <!-- Footer Start -->
      <?php include "footer.php"; ?>
      <!-- Footer End -->

      <script>
        const selectElement = document.getElementById("Animal");
        const customOptionInput = document.getElementById("customAnimal");

        selectElement.addEventListener("change", function() {
          if (selectElement.value === "other") {
            customOptionInput.style.display = "block";
          } else {
            customOptionInput.style.display = "none";
          }
        });
      </script>


      <!-- Script maps -->

      <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap" async defer></script>
      </script>
      <script src="script.js"></script>
      <!-- Script Maps End -->


      </body>

  <?php
  } else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "../login.php";</script>';
  }
} else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "../login.php";</script>';
} ?>