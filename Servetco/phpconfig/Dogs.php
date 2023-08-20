<?php 

  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $Days = $_POST['Days'];
     $message = $_POST['message'];
     $Name = $_POST['Name'];
     $Age = $_POST['Age'];
     $sql = "INSERT INTO dogs_details (Days,message,Name,Age)
     VALUES ('$Days','$message','$Name','$Age')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Contact Records Inserted";
        die(header("Location: ../Admindashboard/Adoption.php"));
      }

  }

  function display_data(){
    global $con;
    $query = "select * from dogs_details";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>

