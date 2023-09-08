<?php

include_once 'config.php';

if (isset($_POST['save'])) {
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



  $sql = "INSERT INTO schedule (FullN,PhoneNum,Sched,PetName,Breed,Color,Age,Gender,Message,user_id,status) 
     VALUES ('$FullN','$PhoneNum','$Sched','$PetName','$Breed','$Color','$Age','$Gender','$Message','$user_id','Pending')";

  // insert in database 
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../services/schedule.php";
        </script>';
    die;
  }
}

if (isset($_POST['btnHideSubmit'])) {
  $id = $_POST['id'];
  $status = $_POST['hiddenStatus'];

  $sql = "UPDATE schedule SET status =  '$status' WHERE Schedule_id = $id ";

  $Save = mysqli_query($con, $sql);
  if ($status === 'Approve') {
    echo '<script type="text/javascript">
        alert("Successfully Approved");
        window.location.href = "../services/schedule.php";
        </script>';
    die;
  }else{
    echo '<script type="text/javascript">
        alert("Request Decline");
        window.location.href = "../services/schedule.php";
        </script>';
  }
}
