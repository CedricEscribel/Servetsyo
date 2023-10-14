if (
    isset($_POST['Email']) &&
    isset($_POST['Password'])
) {

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $emailValid = "select * from adminuser where (Email='$Email');";

    $res = mysqli_query($con, $emailValid);
    $data =  "&Email=" . $Email ;


    }  if (empty($Password)) {
        $em = "Password is required";
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

        $sql = "INSERT INTO adminuser (Email, Password) 
                    VALUES(?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$Email, $Password]);

        header("Location: ../login.php?success=Your account has been created successfully");
        exit;
    }
