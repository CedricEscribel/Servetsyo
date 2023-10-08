<?php
include "../phpconfig/config.php";
session_start();


if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

    if (
        isset($_POST['Emaillog']) &&
        isset($_POST['Passwordlog'])
    ) {
    } else {


        $Address =  $_POST['Address'];
        $PhoneNum =  $_POST['PhoneNum'];

        // update the Database
        $sql = "UPDATE user SET  `Address`='[$Address]',`PhoneNum`='[$PhoneNum]' WHERE user_id=";
        $_SESSION['Fullname'] = $Fullname;

        header("Location: ../EditProfile.php");
        exit;
    }
}
