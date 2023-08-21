<?php 

  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $FullN = $_POST['FullN'];
     $PhoneNum = $_POST['PhoneNum'];
     $Sched = $_POST['Sched'];
     $Date = $_POST['Date'];
     $Time = $_POST['Time'];
     $Message = $_POST['Message'];
     $sql = "INSERT INTO schedule (FullN,PhoneNum,Sched,Date,Time,Message)
     VALUES ('$FullN','$PhoneNum','$Sched','$Date','$Time','$Message')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Schedules Sent";
        die(header("Location: ../schedule.php"));
      }

  }


?>
 