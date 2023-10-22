<?php
include "../phpconfig/config.php";

session_start();
if (
   isset($_POST['Usernamelog']) &&
   isset($_POST['Passwordlog'])
) {

   $Usernamelog = $_POST['Usernamelog'];
   $Passwordlog = $_POST['Passwordlog'];

   $data = "Usernamelog=" . $Usernamelog;
   if (empty($Usernamelog)) {
      $em = "Username is required";
      header("Location: ../Admindashboard/login.php?error=$em&$data");
      exit;
   } else if (empty($Passwordlog)) {
      $em = "Password is required";
      header("Location: ../Admindashboard/login.php?error=$em&$data");
      exit;
   } else {

      $sql = "SELECT * FROM adminuser WHERE Username = ?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$Usernamelog]);

      if ($stmt->rowCount() == 1) {
         $user = $stmt->fetch();

         $Username =  $user['Username'];
         $Password =  $user['Password'];
         $admin_id =  $user['admin_id'];
         $User_type =  $user['User_type'];

         if ($Username === $Usernamelog) {
            if (password_verify($Passwordlog, $Password)) {
               $_SESSION['admin_id'] = $admin_id;
               $_SESSION['User_type'] = $User_type;


               header("Location: ../Admindashboard/Dashboard.php ");
               exit;
            } else {
               $em = "Incorrect Password";
               header("Location: ../Admindashboard/login.php?error=$em&$data");
               exit;
            }
         } else {
            $em = "Incorrect Username or Password";
            header("Location: ../Admindashboard/login.php?error=$em&$data");
            exit;
         }
      } else {
         $em = "Incorrect Username";
         header("Location: ../Admindashboard/login.php?error=$em&$data");
         exit;
      }
   }
}
