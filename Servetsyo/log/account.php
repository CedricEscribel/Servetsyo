<?php
include "../phpconfig/config.php";

$First = $_POST['First'];
$Last = $_POST['Last'];
$Middle = $_POST['Middle'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Address = $_POST['Address'];
$PhoneNum = $_POST['PhoneNum'];
$RoleType = $_POST['RoleType'];
$captcha = $_POST["captcha"];
$confirmcaptcha = $_POST["confirmcaptcha"];

$Fullname = $First . ' ' . $Middle . ' ' . $Last;


$emailValid = "select * from user where (Email='$Email');";

$res = mysqli_query($con, $emailValid);

if ($captcha != $confirmcaptcha) {
    $em = "Incorrect Captcha";
    header("Location: ../login.php?errorsign=$em");
    
} else if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    if ($Email == isset($row['Email'])) {
        $em = "email already exists";
        header("Location: ../login.php?errorsign=$em");

        
    }
} else {


    $Password = password_hash($Password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (Fullname, Email, Password, Address, PhoneNum, RoleType) 
                    VALUES(?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$Fullname, $Email, $Password, $Address, $PhoneNum, $RoleType]);
    header("Location: ../login.php?successsign=Your account has been created successfully");
    exit;
}
