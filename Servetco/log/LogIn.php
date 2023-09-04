<?php

session_start();

if(isset($_POST['Email']) && 
   isset($_POST['Password'])){

    include "../phpconfig/config.php";

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $data = "Email=".$Email;
    
    if(empty($Email)){
    	$em = "Username is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else if(empty($Password)){
    	$em = "Password is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM user WHERE Email = ?";
    	$stmt = $con->prepare($sql);
    	$stmt->execute([$Email]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $Email =  $user['Email'];
          $Password =  $user['Password'];
          $fname =  $user['fname'];
          $id =  $user['id'];
          $pp =  $user['pp'];

          if($Email === $Email){
             if(password_verify($Password, $Password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['fname'] = $fname;
                 $_SESSION['pp'] = $pp;

                 header("Location: ../home.php");
                 exit;
             }else {
               $em = "Incorect User name or Password";
               header("Location: ../login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorect User name or Password";
            header("Location: ../login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorect User name or Password";
         header("Location: ../login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../login.php?error=error");
	exit;
}
