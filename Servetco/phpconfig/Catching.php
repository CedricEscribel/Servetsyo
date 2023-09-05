<?php 
  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $BarangayID = $_POST['BarangayID'];
     $ContNum = $_POST['ContNum'];
     $DogCount = $_POST['DogCount'];
     $Notes = $_POST['Notes'];
     
     $sql = "INSERT INTO catch (BarangayID,ContNum,DogCount,Notes) 
     VALUES ('$BarangayID','$ContNum','$DogCount','$Notes')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Request Sent";
        die(header("Location: ../services/Dog_catching.php"));
      }

  }

  function display_data(){
    global $con;
    $query = "select * from catch";
    $result = mysqli_query($con,$query);
    return $result;
  }

