<?php
    include "../phpconfig/config.php";

    session_start();
if(isset($_POST['Emaillog']) && 
   isset($_POST['Passwordlog'])){

    $Emaillog = $_POST['Emaillog'];
    $Passwordlog = $_POST['Passwordlog'];

    $data = "Emaillog=".$Emaillog;
    if(empty($Emaillog)){
    	$em = "Email is required";
    	header("Location: ../Admindashboard/login.php?error=$em&$data");
	    exit;
    }else if(empty($Passwordlog)){
    	$em = "Password is required";
    	header("Location: ../Admindashboard/login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM adminuser WHERE Email = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$Emaillog]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $Email =  $user['Email'];
          $Password =  $user['Password'];
          $admin_id =  $user['admin_id'];

          if($Email === $Emaillog){
             if(password_verify($Passwordlog, $Password)){
                 $_SESSION['admin_id'] = $admin_id;
                 header("Location: ../Admindashboard/Dashboard.php ");
                 exit;
             }else {
               $em = "Incorrect Password";
               header("Location: ../Admindashboard/login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorrect Email or Password 2";
            header("Location: ../Admindashboard/login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorrect Email";
         header("Location: ../Admindashboard/login.php?error=$em&$data");
         exit;
      }
    }
}

