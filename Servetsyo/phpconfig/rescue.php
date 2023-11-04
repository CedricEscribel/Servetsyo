<?php

include_once 'config.php';

if (isset($_POST['save'])) {
  $Name = $_POST['Name'];
  $ContactNum = $_POST['ContactNum'];
  $animal = $_POST['animal'];
  $Details = $_POST['Details'];
  $Coordinates = $_POST['Coordinates'];



  $sql = "INSERT INTO rescue (Name,ContactNum,animal,Details,Coordinates,status) 
     VALUES ('$Name','$ContactNum','$animal','$Details','$Coordinates','Pending')";

  // insert in database 
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../service.php";
        </script>';
    die;
  }
}

function display_data()
{
  global $con;
  $query = "select * from rescue";
  $result = mysqli_query($con, $query);
  return $result;
}

if (isset($_POST['btnHideSubmit'])) {
  $id = $_POST['id'];
  $status = $_POST['hiddenStatus'];

  $sql = "UPDATE rescue SET status =  '$status' WHERE Rescue_id  = $id ";
  $Save = mysqli_query($con, $sql);
  if ($status === 'Approve') {
    echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/AnimalRescue.php";
          </script>';
  } else {
    echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/AnimalRescue.php";
          </script>';
  }
}


