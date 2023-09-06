<?php  
    include "../phpconfig/config.php";
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

    if(isset($_POST['Emaillog']) && 
    isset($_POST['Passwordlog'])){
 
        $Address =  $user['Address'];
        $PhoneNum =  $user['PhoneNum'];

    if (empty($Fullname)) {
    	$em = "Full name is required";
    	header("Location: ../EditProfile.php?error=$em");
	    exit;
    }else if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../EditProfile.php?error=$em");
	    exit;
    }else {

               // update the Database
               $sql = "UPDATE user 
                       SET  Address=?, PhoneNum=?
                       WHERE user_id=?";
               $stmt = $conn->prepare($sql);
               $stmt->execute([ $Address, $PhoneNum]);
               $_SESSION['Fullname'] = $Fullname;

               header("Location: ../EditProfile.php?success=Your account has been updated successfully");
                exit;

        }
    }
}