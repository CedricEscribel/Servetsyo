<?php

session_start();
session_unset($_SESSION['Email']);
session_unset($_SESSION['Password']);
session_unset($_SESSION['user_id']);
session_unset($_SESSION['RoleType']);
session_destroy();

header('location:../login.php');

?>