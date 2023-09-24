<?php
    include "../phpconfig/config.php";
session_start();

if(isset($_POST['Emaillog']) && 
   isset($_POST['Passwordlog'])){

    $Emaillog = $_POST['Emaillog'];
    $Passwordlog = $_POST['Passwordlog'];

    $data = "Emaillog=".$Emaillog;
    
    if(empty($Emaillog)){
    	$em = "Username is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else if(empty($Passwordlog)){
    	$em = "Password is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM user WHERE Email = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$Emaillog]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $Email =  $user['Email'];
          $Password =  $user['Password'];
          $Fullname =  $user['Fullname'];
          $user_id =  $user['user_id'];
          $Address =  $user['Address'];
          $PhoneNum =  $user['PhoneNum'];

          if($Email === $Emaillog){
             if(password_verify($Passwordlog, $Password)){
                 $_SESSION['user_id'] = $user_id;
                 $_SESSION['Fullname'] = $Fullname;
                 $_SESSION['Address'] = $Address;
                 $_SESSION['PhoneNum'] = $PhoneNum;

                 header("Location: ../index.php ");
                 exit;
             }else {
               $em = "Incorrect Password";
               header("Location: ../login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorrect Email or Password 2";
            header("Location: ../login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorrect Email";
         header("Location: ../login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../login.php?error=error");
	exit;
}
