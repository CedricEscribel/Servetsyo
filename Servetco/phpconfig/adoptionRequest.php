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
     
     $sql = "INSERT INTO adoptionrequest (Fullname,PhoneNum,Address,Email,Interview,Date,status) 
     VALUES ('$Fullname','$PhoneNum','$Address','$Email','$Interview','$Date','Pending')";

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

  if (isset($_POST['btnHideSubmit'])) {
    $id = $_POST['id'];
    $status = $_POST['hiddenStatus'];
  
    $sql = "UPDATE adoptionrequest SET status =  '$status' WHERE AdoptReq_id = $id ";
  
    $Save = mysqli_query($con, $sql);
    if ($status === 'Approve') {
      echo '<script type="text/javascript">
          alert("Successfully Approved");
          window.location.href = "../Admindashboard/Adoption_Request.php";
          </script>';
      die;
    }else{
      echo '<script type="text/javascript">
          alert("Request Decline");
          window.location.href = "../Admindashboard/Adoption_Request.php";
          </script>';
    }
  }


?>
 