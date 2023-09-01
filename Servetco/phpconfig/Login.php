<?php 

  include_once 'config.php';
  session_start();

  if(isset($_POST['Upload']))
  {	 
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $Fullname = $_POST['Fullname'];
     $Address = $_POST['Address'];
     $PhoneNum = $_POST['PhoneNum'];
     $sql = "INSERT INTO user (Email,Password,Fullname,Address,PhoneNum) 
     VALUES ('$Email','$Password','$Fullname','$Address','$PhoneNum')";


      // hashing the password
      $Password = password_hash($Password, PASSWORD_DEFAULT);


    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo "Schedules Sent";
        die(header("Location: ../Login.php"));
      }

  }

// Sign up form
  if(isset($_POST['Sign_up'])){

    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = md5($_POST['Password']);
    $Fullname = mysqli_real_escape_string($con, $_POST['Fullname']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $PhoneNum = mysqli_real_escape_string($con, $_POST['PhoneNum']);

    $select = " SELECT * FROM user WHERE Email = '$Email' && Password = '$Password' ";
 
    $result = mysqli_query($con, $select);

    if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_assoc($result);
      
      if($Email==isset($row['Email']))
      {
            echo "email already exists";
      }

    }else{

          $insert = "INSERT INTO user(`Email`, `Password`, `Fullname`, `Address`, `PhoneNum`) VALUES('$Email','$Password','$Fullname','$Address', '$PhoneNum')";
          mysqli_query($con, $insert);
          header('location:../login.php');

    }
 
 };

  ?>
