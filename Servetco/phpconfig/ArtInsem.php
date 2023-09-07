<?php 

  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $Name = $_POST['Name'];
     $ContNum = $_POST['ContNum'];
     $Animal = $_POST['Animal'];
     $Coordinates = $_POST['Coordinates'];
     $Details = $_POST['Details'];
     $user_id = $_POST['user_id'];

     $sql = "INSERT INTO insemination (Name,ContNum,Animal,Coordinates,Details,user_id) 
     VALUES ('$Name','$ContNum','$Animal','$Coordinates','$Details','$user_id')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Sent";
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
 