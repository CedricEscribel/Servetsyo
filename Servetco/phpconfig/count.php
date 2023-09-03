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

$sql = "SELECT * from dog_catch";
  
if ($result = mysqli_query($con, $sql)) {

// Return the number of rows in result set
$Catch = mysqli_num_rows( $result );
     
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
?>