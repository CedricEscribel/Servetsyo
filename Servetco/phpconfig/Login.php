<?php 

  include_once 'config.php';


  if(isset($_POST['Upload']))
  {	 
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $Fullname = $_POST['Fullname'];
     $Address = $_POST['Address'];
     $PhoneNum = $_POST['PhoneNum'];
     $sql = "INSERT INTO user (Email,Password,Fullname,Address,PhoneNum) 
     VALUES ('$Email','$Password','$Fullname','$Address','$PhoneNum')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Schedules Sent";
        die(header("Location: ../Login.php"));
      }

  }

  ?>