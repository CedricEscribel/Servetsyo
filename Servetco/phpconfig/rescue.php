<?php 

  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $Name = $_POST['Name'];
     $ContactNum = $_POST['ContactNum'];
     $Details = $_POST['Details'];
     $Coordinates = $_POST['Coordinates'];
     
     $sql = "INSERT INTO rescue (Name,ContactNum,Details,Coordinates) 
     VALUES ('$Name','$ContactNum','$Details','$Coordinates')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        die(header("Location: ../services/Rescue.php"));
      }

  }

  function display_data(){
    global $con;
    $query = "select * from rescue";
    $result = mysqli_query($con,$query);
    return $result;
  }


?>
 