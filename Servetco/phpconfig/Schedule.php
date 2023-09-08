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
     $user_id = $_POST['user_id'];
     
     $sql = "INSERT INTO schedule (FullN,PhoneNum,Sched,PetName,Breed,Color,Age,Gender,Message,user_id) 
     VALUES ('$FullN','$PhoneNum','$Sched','$PetName','$Breed','$Color','$Age','$Gender','$Message','$user_id')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {  
        echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../services/schedule.php";
        </script>';
        die;
      }

  }


?>
 