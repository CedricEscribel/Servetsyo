<?php 
    $host= 'localhost';
    $user= 'root';
    $password = "";
    $database = 'users';

    $conn = mysqli_connect($host,$user,$password,$database);

    if (!$conn) {                                             
        die("Connection failed: " . mysqli_connect_error());     
      }

?>