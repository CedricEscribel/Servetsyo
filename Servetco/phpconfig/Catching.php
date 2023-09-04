<?php 
  include_once 'config.php';


  function display_data(){
    global $con;
    $query = "select * from catch";
    $result = mysqli_query($con,$query);
    return $result;
  }