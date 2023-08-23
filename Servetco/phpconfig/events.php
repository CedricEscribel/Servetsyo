<?php 

  include_once 'config.php';


  if(isset($_POST['save']))
  {	 
     $EventName = $_POST['EventName'];
     $Details = $_POST['Details'];
     $sql = "INSERT INTO events (EventName,Details) 
     VALUES ('$EventName','$Details')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Schedules Sent";
        die(header("Location: ../Admindashboard/Events.php "));
      }

  }

?>