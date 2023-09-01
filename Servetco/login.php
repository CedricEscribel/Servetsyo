<?php session_start(); ?>

<?php

if (isset($_POST['Login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * from users WHERE email = '$email' AND password = '$password'";
  $user = mysqli_query($conn, $query);

  if (!$user) {
    die('query Failed' . mysqli_error($conn));
  }

  while ($row = mysqli_fetch_array($user)) {

    $user_id = $row['ID'];
    $user_name = $row['username'];
    $user_email = $row['email'];
    $user_password = $row['password'];
  }
  if ($user_email == $email  &&  $user_password == $password) {

    $_SESSION['id'] = $user_id;       // Storing the value in session
    $_SESSION['name'] = $user_name;   // Storing the value in session
    $_SESSION['email'] = $user_email; // Storing the value in session
    //! Session data can be hijacked. Never store personal data such as password, security pin, credit card numbers other important data in $_SESSION
    header('location: dashboard.php?user_id=' . $user_id);
  } else {
    header('location: login.php');
  }
}
?>


<head>
        <meta charset="utf-8">
        <title>About </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
  	    <link href="../css/bootstrap.min.css" rel="stylesheet">
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

<form class="shadow w-450 p-3" 
    	      action="phpconfig/Login.php" 
    	      method="post">

<!-- Login -->
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

    <div class="forms">
        <div class="form-content">

        <div class="login-form">
            <div class="title">Login</div>
          <form action="#" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="Email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="Password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="Login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
            </div>
        </div>

<!-- Sign up -->
        <div class="signup-form">
          <div class="title">Signup</div>
        <form method="post" action="phpconfig/Login.php">

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
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
                <input type="checkbox" onclick="Showpass()">Show Password
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
                <input type="submit" name="Sign_up">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>

    </div>
    
    </div>
    </div>
  </div>

</form> 
<!-- login  end -->

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
