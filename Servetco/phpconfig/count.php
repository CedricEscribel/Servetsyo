<?php
  include 'config.php';


  $sql = "SELECT * from schedule";
  
  if ($result = mysqli_query($con, $sql)) {

  // Return the number of rows in result set
  $schedule = mysqli_num_rows( $result );
       
}


$sql = "SELECT * from rescue";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$Rescue = mysqli_num_rows( $result );
     
}

$sql = "SELECT * from dogs";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$dogs = mysqli_num_rows( $result );
     
}

$sql = "SELECT * from catch";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$catch = mysqli_num_rows( $result );
     
}

$sql = "SELECT * from adoption";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$adoption = mysqli_num_rows( $result );
     
}

$sql = "SELECT * from events";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$Events = mysqli_num_rows( $result );
     
}

$sql = "SELECT * from adoptionrequest";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$adoptionrequest = mysqli_num_rows( $result );
     
}

$sql = "SELECT * from insemination";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$insemination = mysqli_num_rows( $result );
     
}

$sql = "SELECT * from dogs_pound";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$dogs_pound = mysqli_num_rows( $result );
     
}
?>

