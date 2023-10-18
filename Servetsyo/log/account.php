<?php
include "../phpconfig/config.php";

if (
    isset($_POST['Fullname']) &&
    isset($_POST['Email']) &&
    isset($_POST['Password']) &&
    isset($_POST['Address']) &&
    isset($_POST['PhoneNum']) &&
    isset($_POST['RoleType'])
) {

    $Fullname = $_POST['Fullname'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $PhoneNum = $_POST['PhoneNum'];
    $RoleType = $_POST['RoleType'];

    $emailValid = "select * from user where (Email='$Email');";

    $res = mysqli_query($con, $emailValid);
    $data = "Fullname=" . $Fullname . "&Email=" . $Email . "&Address=" . $Address . "&PhoneNum=" . $PhoneNum . "&RoleType=" . $RoleType;



    if (empty($Fullname)) {
        $em = "Full name is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else if (empty($Password)) {
        $em = "Password is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else if (empty($Address)) {
        $em = "Address is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else if (empty($PhoneNum)) {
        $em = "Phone Number Number is required";
        header("Location: ../login.php?error=$em&$data");
        exit;

    } else if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($Email == isset($row['Email'])) {
            $em = "email already exists";
            header("Location: ../login.php?error=$em&$data");  
            exit;
        }

    } else {
        $Password = password_hash($Password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (Fullname, Email, Password, Address, PhoneNum, RoleType) 
                    VALUES(?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$Fullname, $Email, $Password, $Address, $PhoneNum, $RoleType]);

        header("Location: ../login.php?success=Your account has been created successfully");
        exit;
    }
} else {
    header("Location: ../login.php?error=error");
    exit;
}
