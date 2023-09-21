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
     
     $sql = "INSERT INTO adoption (FullN,PhoneNum,Sched,Date,Time,Message) 
     VALUES ('$FullN','$PhoneNum','$Sched','$Date','$Time','$Message')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {

        echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../index.php";
        </script>';
        die;
      }

  }


  function display_data(){
    global $con;
    $query = "select * from adoption";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>
 