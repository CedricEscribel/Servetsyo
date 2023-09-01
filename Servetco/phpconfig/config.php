<?php 

  $con = mysqli_connect("localhost","root","","servetsyo");

  if(!$con){
    die("Connection Error");
  }
  
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>
