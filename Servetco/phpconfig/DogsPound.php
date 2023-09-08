<?php 

  include_once 'config.php';

  if(isset($_POST['submit']))
  {	 
     $DogName = $_POST['DogName'];
     $DateIn = $_POST['DateIn'];
     $Age = $_POST['Age'];
     $Gender = $_POST['Gender'];
     $RescuedAt = $_POST['RescuedAt'];
     
     $sql = "INSERT INTO dogs_pound (DogName,DateIn,Age,Gender,RescuedAt) 
     VALUES ('$DogName','$DateIn','$Age','$Gender','$RescuedAt')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Schedules Sent";
        die(header("Location: ../Admindashboard/Dogs_in_pound.php"));
      }

  }


  function display_data(){
    global $con;
    $query = "select * from dogs_pound";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>
 