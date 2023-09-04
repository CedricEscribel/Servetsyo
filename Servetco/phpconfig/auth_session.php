<?php
    session_start();
    if(!isset($_SESSION["Email"])) {
        header("Location: login.php");
        exit();
        }else{
            echo "<script>alert('You don't have access for this page');
            location.replace('./');</script>";
        }

?>


