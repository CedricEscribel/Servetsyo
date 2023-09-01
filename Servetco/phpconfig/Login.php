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





if(isset($_POST['Login'])){

  $Email = mysqli_real_escape_string($con, $_POST['Email']);
  $Password = md5($_POST['Password']);

  $select = " SELECT * FROM user WHERE Email = '$Email' && Password = '$Password' ";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      
      die(header("Location: ../user.php"));
    }else{
      $error[] = 'incorrect email or password!';
   }

};
  ?>


<?php session_start(); ?>

<?php

if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * from users WHERE email = '$email' AND password = '$password'";
  $user = mysqli_query($conn, $query);

  if (!$user) {
    die('query Failed' . mysqli_error($conn));
  }

  while ($row = mysqli_fetch_array($user)) {

    $user_id = $row['ID'];
    $user_name = $row['username'];
    $user_email = $row['email'];
    $user_password = $row['password'];
  }
  if ($user_email == $email  &&  $user_password == $password) {

    $_SESSION['id'] = $user_id;       // Storing the value in session
    $_SESSION['name'] = $user_name;   // Storing the value in session
    $_SESSION['email'] = $user_email; // Storing the value in session
    //! Session data can be hijacked. Never store personal data such as password, security pin, credit card numbers other important data in $_SESSION
    header('location: dashboard.php?user_id=' . $user_id);
  } else {
    header('location: login.php');
  }
}
?>