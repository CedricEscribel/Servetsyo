<?php 

  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $Name = $_POST['Name'];
     $ContactNum = $_POST['ContactNum'];
     $Animal = $_POST['Animal'];
     $Details = $_POST['Details'];
     $Coordinates = $_POST['Coordinates'];
     $status = $_POST['status'];



     $Animals="";  
     foreach($Animal as $Animal1)  
        {  
           $Animal.= $Animal1.",";  
        }  


     $sql = "INSERT INTO rescue (Name,ContactNum,Animal,Details,Coordinates,status) 
     VALUES ('$Name','$ContactNum','$Details','$Animals','$Coordinates','Pending')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../services/Rescue.php";
        </script>';
        die;
      }

  }

  function display_data(){
    global $con;
    $query = "select * from rescue";
    $result = mysqli_query($con,$query);
    return $result;
  }

  if (isset($_POST['btnHideSubmit'])) {
    $id = $_POST['id'];
    $status = $_POST['hiddenStatus'];
  
    $sql = "UPDATE rescue SET status =  '$status' WHERE Rescue_id  = $id ";
  
    $Save = mysqli_query($con, $sql);
    if ($status === 'Approve') {
      echo '<script type="text/javascript">
          alert("Successfully Approved");
          window.location.href = "../Admindashboard/Animal_Rescue.php";
          </script>';
      die;
    }else{
      echo '<script type="text/javascript">
          alert("Request Decline");
          window.location.href = "../Admindashboard/Animal_Rescue.php";
          </script>';
    }
  }
?>
 