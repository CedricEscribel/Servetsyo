<?php
date_default_timezone_set("Asia/Bangkok");

include_once 'config.php';


if (isset($_POST["submit"])) {
  $EventName = $_POST["EventName"];
  $Details = $_POST["Details"];
  $Dates = $_POST["Dates"];
  $Expired_date = $_POST['Expired_date'];

  if ($_FILES["image"]["error"] == 4) {
    echo
    "<script> alert('Image does not exist'); </script>";
  } else {
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png', 'gif'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtension)) {
      echo
      "
        <script>
          alert('Invalid image extension');
        </script>
        ";
    } else {

      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;
      move_uploaded_file($tmpName, 'EventsImg/' . $newImageName);
      $query = "INSERT INTO events VALUES('', '$EventName', '$Details', '$newImageName', '$Dates', '$Expired_date')";
      mysqli_query($con, $query);
      echo
      "
        <script>
          alert('Successfully posted');
          document.location.href = 'Announcement.php';
        </script>
        ";
    }
  }
}


$query = mysqli_query($con, "SELECT * FROM `events`");
$date = date("Y-m-d");
while ($fetch = mysqli_fetch_array($query)) {
  if ($fetch['Expired_date'] === $date) {
    mysqli_query($con, "DELETE FROM `events` WHERE `Expired_date` = '$fetch[Expired_date]'") or die(mysqli_connect_error());
  }
}
