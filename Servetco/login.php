
<head>
        <meta charset="utf-8">
        <title>Login </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="css/Login.css">
         <?php include 'header.php';?>


<style>

input + span {
  padding-right: 30px;
}

input:invalid + span::after {
  position: absolute;
  content: "✖";
  padding-left: 5px;
  color: red;
}

input:valid + span::after {
  position: absolute;
  content: "✓";
  padding-left: 5px;
  color: greenyellow;
}

</style>

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
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                    <div class="dropdown-menu m-0">
                        <a href="profile.php" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item ">Schedules</a>
                        <a href="login.php" class="dropdown-item">Login</a>
                    </div>
                </div>
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
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
              <div class="title">Log in</div>
            <form action="log/LogIn.php" method="POST"  autocomplete="off">   

              <?php if(isset($_GET['error'])){ ?>
              <div class="alert alert-danger" role="alert">
                 <?php echo $_GET['error']; ?>
              </div>
              <?php } ?>

              <div class="input-boxes">
              <label class="label">Email address:</label>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="Emaillog" placeholder="Enter your Email" value="<?php echo (isset($_GET['Emaillog']))?$_GET['Emaillog']:"" ?>" required>
                </div>

                <label class="label">Password:</label>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="Passwordlog" id="Passlog" placeholder="Enter your password" required>
                </div>
                <div class="show_pass" >
                  <input type="checkbox" onclick="Showpasslog()">&#32;Show Password
                </div>

                <div class="button input-box">
                  <input value="Log in" type="submit"  name="Login">
                </div>
                <div class="text sign-up-text">Don't have an account? <label class="labels" for="flip">Sign up now</label></div>
              </div>
            </form>
          </div>

      <!-- Login end -->


      <!-- Sign up -->

          <div class="signup-form">
          <form method="post" action="log/account.php"  autocomplete="off">
            <div class="title">Sign up</div>
            <?php if(isset($_GET['error'])){ ?>
              <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
             </div>
            <?php } ?>
            <?php if(isset($_GET['success'])){ ?>
            <div class="alert alert-success" role="alert">
             <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
              <div class="input-boxes">
              <label class="label">Email address:</label>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="Email" placeholder="Enter your Email" required>
                  <span class="validity"></span>
                </div>
                <label class="label">Password:</label>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="Password" id="Pass" placeholder="Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
                <div class="show_pass" >
                  <input type="checkbox" onclick="Showpass()">&#32;Show Password
                </div>
                <label class="label">Full Name:</label>
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" autocapitalize="sentences" name="Fullname" placeholder="Full Name" required  		       
                  value="<?php echo (isset($_GET['Fullname']))?$_GET['Fullname']:"" ?>">
                </div>
                <label class="label">Address:</label>
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" name="Address" placeholder="Enter your Address" required
                  value="<?php echo (isset($_GET['Address']))?$_GET['Address']:"" ?>">
                </div>
                <label class="label">Contact Number:</label>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="tel" name="PhoneNum" placeholder="09123456789" pattern="[0-9]{11}" maxlength="11" required
                  value="<?php echo (isset($_GET['PhoneNum']))?$_GET['PhoneNum']:"" ?>">
                  <span class="validity"></span>
                </div>
                <div class="button input-box">
                  <input type="submit" value="Sign Up"  name="Sign_up">
                </div>
                <div class="text sign-up-text">Already have an account? <label class="labels" for="flip">Log in now</label></div>
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

      function Showpasslog() {
        var x = document.getElementById("Passlog");
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
</body>
