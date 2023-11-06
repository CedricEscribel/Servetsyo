<?php
include "../phpconfig/config.php";



if (isset($_POST["edit"])) {
    $Address = mysqli_real_escape_string($con, $_POST["Address"]);
    $PhoneNum = mysqli_real_escape_string($con, $_POST["PhoneNum"]);
    $user_id = mysqli_real_escape_string($con, $_POST["user_id"]);
    
    // Check if a new password is provided
    if (!empty($_POST["newPassword"])) {
        $newPassword = mysqli_real_escape_string($con, $_POST["newPassword"]);
        $confirmPassword = mysqli_real_escape_string($con, $_POST["confirmPassword"]);
        
        // Verify that the new password and confirmation match
        if ($newPassword != $confirmPassword) {
            die("New password and confirmation do not match");
        }
        
        // You should implement password validation here (e.g., length, complexity)

        // Hash and salt the new password before updating it in the database
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
        
        // Update user's password and other information
        $sqlUpdate = "UPDATE user SET Address = '$Address', PhoneNum = '$PhoneNum', Password = '$hashedPassword' WHERE user_id = '$user_id'";
    } else {
        // Update user's information without changing the password
        $sqlUpdate = "UPDATE user SET Address = '$Address', PhoneNum = '$PhoneNum' WHERE user_id = '$user_id'";
    }
    
    if (mysqli_query($con, $sqlUpdate)) {
        echo '<script type="text/javascript">
            alert("Edit Saved");
            window.location.href = "../EditProfile.php";
        </script>';
        die;
    }

}
