<?php
include "../phpconfig/config.php";

if (
    isset($_POST['Fullname']) &&
    isset($_POST['Username']) &&
    isset($_POST['Password']) &&
    isset($_POST['Position']) &&
    isset($_POST['User_type']) 
) {

    $Fullname = $_POST['Fullname'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Position = $_POST['Position'];
    $User_type = $_POST['User_type'];

    $UsernameValid = "select * from adminuser where (Username='$Username');";

    $res = mysqli_query($con, $UsernameValid);
    $data = "Fullname=" . $Fullname . "&Username=" . $Username . "&Position=" . $Position . "&User_type=" . $User_type ;

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($Username == isset($row['Username'])) {
            $em = "Username already exists";
            header("Location: ../login.php?error=$em&$data");  
            exit;
        }

    } else {
        $Password = password_hash($Password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO adminuser (Fullname, Username, Password, Position, User_type) 
                    VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$Fullname, $Username, $Password, $Position, $User_type]);

        echo '<script>window.location.href = "Dashboard.php";</script>';
        exit;
    }
} else {
    exit;
}