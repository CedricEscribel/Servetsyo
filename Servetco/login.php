
<head>
        <meta charset="utf-8">
        <title>About </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="css/Login.css">
         <?php include 'header.php';?>

</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <?php include 'navlogo.php';?>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link ">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Events.php" class="nav-item nav-link">Events</a>
                <a href="Login.php" class="nav-item nav-link active">Login</a>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->


<div class="LoginContainer">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="img/baliuag highfve.jpg" alt="">
      </div>
      <div class="back">
        <img class="backImg" src="img/baliuag highfve.jpg" alt="">
      </div>
    </div>

<!-- Login -->    
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
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
              <div class="title">Login</div>
            <form action="#" method="post">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="text" name="Email" placeholder="Enter your Email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="Password" placeholder="Enter your password" required>
                </div>
                <div class="text"><a href="phpconfig/logout.php">Forgot password?</a></div>
                <div class="button input-box">
                  <input value="Login" type="submit"  name="Login">
                </div>
                <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
              </div>
            </form>
          </div>
<?php
  }
?>
<!-- Login end -->


  <!-- Sign up -->
          <div class="signup-form">
            <div class="title">Signup</div>
            <form method="post" action="phpconfig/Login.php">

              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="Email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="Password" id="Pass" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
                <div class="show_pass" style="margin-left: 5%;">
                  <input type="checkbox" onclick="Showpass()">&#32;Show Password
                </div>
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" name="Fullname" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" name="Address" placeholder="Enter your address" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="text" name="PhoneNum" placeholder="Enter your Phone Number" required>
                </div>
                <div class="button input-box">
                  <input type="submit" value="Sign Up"  name="Sign_up">
                </div>
                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
              </div>
            </form>
         </div>
  <!-- Signup end -->

      </div> 
    </div>
  </div>



    <!-- Footer Start -->
    <?php include 'footer.php';?>
    <!-- Footer End -->
    <script>
      function Showpass() {
        var x = document.getElementById("Pass");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
  <!-- Template Javascript --> 
    <script src="js/main.js"></script>
</body>
