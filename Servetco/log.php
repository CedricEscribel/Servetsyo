<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('phpconfig/config.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['Email'])) {
        $Email = stripslashes($_REQUEST['Email']);    // removes backslashes
        $Email = mysqli_real_escape_string($con, $Email);
        $Password = stripslashes($_REQUEST['Password']);
        $Password = mysqli_real_escape_string($con, $Password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `user` WHERE Email='$Email'
                     AND Password='" . md5($Password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['Email'] = $Email;
            // Redirect to user dashboard page
            header("Location: profile.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Email/Password.</h3><br/>
                  <p class='link'>Click here to <a href='log.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="Email" placeholder="Username" autofocus="true"/>
        <input type="Password" class="login-input" name="Password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>
<?php
    }
?>
</body>
</html>
