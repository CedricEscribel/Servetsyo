<?php 

  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $FullN = $_POST['FullN'];
     $PhoneNum = $_POST['PhoneNum'];
     $Sched = $_POST['Sched'];
     $PetName = $_POST['PetName'];
     $Breed = $_POST['Breed'];
     $Color = $_POST['Color'];
     $Age = $_POST['Age'];
     $Gender = $_POST['Gender'];
     $Message = $_POST['Message'];
     
     $sql = "INSERT INTO schedule (FullN,PhoneNum,Sched,PetName,Breed,Color,Age,Gender,Message) 
     VALUES ('$FullN','$PhoneNum','$Sched','$PetName','$Breed','$Color','$Age','$Gender','$Message')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        
        echo '<script type="text/javascript">alert("hello!");</script>';
        die(header("Location: ../services/schedule.php"));
      }

  }


?>
 