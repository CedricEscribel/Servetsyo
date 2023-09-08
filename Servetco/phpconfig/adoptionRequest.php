<?php 

  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $Fullname = $_POST['Fullname'];
     $PhoneNum = $_POST['PhoneNum'];
     $Address = $_POST['Address'];
     $PhoneNum = $_POST['PhoneNum'];
     $Email = $_POST['Email'];
     $Interview = $_POST['Interview'];
     $Date = $_POST['Date'];
     
     $sql = "INSERT INTO adoptionrequest (Fullname,PhoneNum,Address,Email,Interview,Date) 
     VALUES ('$Fullname','$PhoneNum','$Address','$Email','$Interview','$Date')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Schedules Sent";
        die(header("Location: ../services/Adoption.php"));
      }

  }


  function display_data(){
    global $con;
    $query = "select * from adoptionrequest";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>
 