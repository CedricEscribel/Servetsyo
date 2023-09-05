<?php 

  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $Name = $_POST['Name'];
     $PhoneNum = $_POST['PhoneNum'];
     $Sched = $_POST['Sched'];
     $Animal = $_POST['Animal'];
     $Location = $_POST['Location'];
     $Status = $_POST['Status'];
     
     $sql = "INSERT INTO insemination (Name,PhoneNum,Sched,Animal,Location,Status) 
     VALUES ('$Name','$PhoneNum','$Sched','$Animal','$Location','$Status')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Schedules Sent";
        die(header("Location: ../services/Insemination.php"));
      }

  }


  function display_data(){
    global $con;
    $query = "select * from insemination";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>
 