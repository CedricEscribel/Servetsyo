<?php
    session_start();
    if(!isset($_SESSION["Email"])) {
        $query = "SELECT `id`, `Email`, `Password`, `Fullname`, `Address`, `PhoneNum` FROM `user` WHERE Email =".$_SESSION["Email"] ;
        header("Location: login.php");
        exit();
        }else{
            echo "<script>alert('You don't have access for this page'); location.replace('./');</script>";
        }

?>


