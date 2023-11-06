<?php

require_once '../phpconfig/Schedule.php';

session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

  include "../log/session.php";
  $user = getUserById($_SESSION['user_id'], $conn);

?>

  <?php if ($_SESSION['RoleType'] == 'user') { ?>

    <head>
      <meta charset="utf-8">
      <title>Schedule </title>
      <link rel="icon" href="../img/icon.png" type="image/x-icon">

      <?php include "header.php"; ?>
      <link rel="stylesheet" href="../css/Schedule.css">
      <!-- Navbar End -->


      <!-- Schedule form start -->

      <div class="Schedule_form">
        <h1>Schedule Request</h1>

        <form method="post" action="../phpconfig/Schedule.php" autocomplete="off">
          <div class="form">


            <label for="name">Name:</label>
            <input type="text" id="name" disabled placeholder=" <?= $user['Fullname'] ?>">

            <select class="Hide" name="user_id" style="display: none;">
              <option value="<?= $user['user_id'] ?>"></option>
            </select>

            <select class="Hide" name="FullN" style="display: none;">
              <option value="<?= $user['Fullname'] ?>"></option>
            </select>

            <select class="Hide" name="PhoneNum" style="display: none;">
              <option value="<?= $user['PhoneNum'] ?>"></option>
            </select>

            <label for="Number">Contact Number:</label>
            <input type="text" id="number" disabled placeholder=" <?= $user['PhoneNum'] ?>">

            <label for="Animal">Animal:</label>
            <select class="dropbtn" id="Animal" name="Animal" required>
              <option value="">Please Select</option>
              <option value="Dog">Dog</option>
              <option value="Cat">Cat</option>
              <option value="other">Others</option>
            </select>
            <input type="text" id="customAnimal" name="Animal2" style="display: none;" placeholder="Please Specify">


            <label for="Sched">Schedule For:</label>
            <select class="dropbtn" id="schedule" name="Sched" required>
              <option value="">Please Select</option>
              <option value="Anti-rabies Vaccination">Anti-rabies Vaccination</option>
              <option value="Castration">Castration</option>
              <option value="other">Others</option>
            </select>
            <input type="text" id="customschedule" name="Sched2" style="display: none;" placeholder="Please Specify">

            <label for="PName" style="margin-top: 15px;">Pet's name:</label>
            <input type="text" name="PetName" placeholder="Pet's name" required>

            <label for="Breed">Breed:</label>
            <input type="text" id="Breed" name="Breed" placeholder="Breed" required>

            <label for="Color">Color:</label>
            <input type="text" id="Color" name="Color" placeholder="Color" required>

            <label for="Age">Age <sub>(months old)</sub>:</label>
            <input type="number" inputmode="numeric" id="Age" name="Age" placeholder="Age" required>

            <label for="Gender">Gender:</label>
            <select class="dropbtn" name="Gender" required>
              <option value="">Please Select</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>


            <label for="message">Note:</label>
            <textarea id="message" name="Message" placeholder="Additional details"></textarea>

            <input type="submit" name="save" value="Submit">
          </div>
        </form>
      </div>
      <!-- Schedule form end -->

      <!-- Footer Start -->
      <?php include "footer.php"; ?>
      <!-- Footer End -->


      </body>

      <script>
        const selectElement = document.getElementById("Animal");
        const customOptionInput = document.getElementById("customAnimal");

        selectElement.addEventListener("change", function() {
          if (selectElement.value === "other") {
            customOptionInput.style.display = "block";
            document.getElementById("customAnimal").required = true;

          } else {
            customOptionInput.style.display = "none";
            document.getElementById("customAnimal").required = false;

          }
        });

        const selectschedule = document.getElementById("schedule");
        const Optionschedule = document.getElementById("customschedule");

        selectschedule.addEventListener("change", function() {
          if (selectschedule.value === "other") {
            Optionschedule.style.display = "block";
            document.getElementById("customschedule").required = true;

          } else {
            Optionschedule.style.display = "none";
            document.getElementById("customschedule").required = false;

          }
        });
      </script>

  <?php
  } else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "../login.php";</script>';
  }
} else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "../login.php";</script>';
} ?>