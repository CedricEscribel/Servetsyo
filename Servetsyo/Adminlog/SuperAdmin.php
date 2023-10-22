<?php
include "../phpconfig/config.php";

if (
    isset($_POST['Fullname']) &&
    isset($_POST['Username']) &&
    isset($_POST['PhoneNum']) &&
    isset($_POST['Password']) &&
    isset($_POST['Position']) &&
    isset($_POST['User_type'])
) {

    $Fullname = $_POST['Fullname'];
    $Username = $_POST['Username'];
    $PhoneNum = $_POST['PhoneNum'];
    $Password = $_POST['Password'];
    $Position = $_POST['Position'];
    $User_type = $_POST['User_type'];

    $UsernameValid = "select * from adminuser where (Username='$Username');";

    $res = mysqli_query($con, $UsernameValid);
    $data = "Fullname=" . $Fullname . "&Username=" . $Username . "&PhoneNum=" . $PhoneNum. "&Position=" . $Position . "&User_type=" . $User_type;

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($Username == isset($row['Username'])) {
            $em = "Username already exists";
            header("Location: ../Admindashboard/user.php?error=$em&$data");
            exit;
        }
    } else {
        if ($User_type == 'Barangay') {
            $Password = password_hash($Password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user (Fullname, Email, PhoneNum, Password, RoleType) 
                            VALUES(?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$Fullname, $Username, $PhoneNum, $Password, $User_type]);
            echo '<script>window.location.href = "../Admindashboard/user.php";</script>';
            exit;
        } else {
            $Password = password_hash($Password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO adminuser (Fullname, Username, Password, Position, User_type, PhoneNum) 
                    VALUES(?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$Fullname, $Username, $Password, $Position, $User_type, $PhoneNum]);
            echo '<script>window.location.href = "../Admindashboard/user.php";</script>';
            exit;
        }
    }
} else {
    exit;
}
