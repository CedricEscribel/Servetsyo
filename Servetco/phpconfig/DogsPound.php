<?php

include_once 'config.php';

if (isset($_POST['submit'])) {
  $DogName = $_POST['DogName'];
  $DateIn = $_POST['DateIn'];
  $Age = $_POST['Age'];
  $Gender = $_POST['Gender'];
  $RescuedAt = $_POST['RescuedAt'];
  $status = $_POST['status'];

  $sql = "INSERT INTO dogs_pound (DogName,DateIn,Age,Gender,RescuedAt,status) 
    VALUES ('$DogName','$DateIn','$Age','$Gender','$RescuedAt','Pending')";

  // insert in database 
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo "Schedules Sent";
    die(header("Location: ../Admindashboard/Dogs_in_pound.php"));
  }
}


function display_data()
{
  global $con;
  $query = "select * from dogs_pound";
  $result = mysqli_query($con, $query);
  return $result;
}


if (isset($_POST['btnHideSubmit'])) {
  $id = $_POST['id'];
  $status = $_POST['hiddenStatus'];

  $sql = "UPDATE dogs_pound SET status =  '$status' WHERE DPoundID   = $id ";

  $Save = mysqli_query($con, $sql);
  if ($status === 'Approve') {
    
    echo '<script type="text/javascript">
  alert("Successfully Approved");
  window.location.href = "../Admindashboard/Dogs_in_pound.php";
  </script>';
    die;
  } else {
    echo '<script type="text/javascript">
  alert("Request Declined");
  window.location.href = "../Admindashboard/Dogs_in_pound.php";
  </script>';
  }
}
