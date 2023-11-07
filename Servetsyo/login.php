<head>
  <meta charset="utf-8">
  <title>Login </title>
  <link rel="icon" href="img/icon.png" type="image/x-icon">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="css/Login.css">
  <?php include 'header.php'; ?>


  <style>
    input+span {
      padding-right: 30px;
    }

    input:invalid+span::after {
      position: absolute;
      content: "✖";
      padding-left: 5px;
      color: red;
    }

    input:valid+span::after {
      position: absolute;
      content: "✓";
      padding-left: 5px;
      color: greenyellow;
    }

    input.captcha {
      pointer-events: none;
      letter-spacing: 12px;
      text-decoration: line-through;
      color-scheme: dark;
      text-decoration-thickness: auto;
    }
  </style>

</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <?php include 'navlogo.php'; ?>

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
            <a href="#" class="dropdown-item">Login</a>
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

          <form action="log/LogIn.php" method="POST" autocomplete="off">

            <?php if (isset($_GET['error'])) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
              </div>
            <?php } ?>
            <?php if (isset($_GET['successsign'])) { ?>
              <div class="alert alert-success" role="alert">
                <?php echo $_GET['successsign']; ?>
              </div>
            <?php } ?>

            <div class="input-boxes">
              <label class="label">Email address:</label>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="Email" name="Emaillog" placeholder="Enter your Email" value="<?php echo (isset($_GET['Emaillog'])) ? $_GET['Emaillog'] : "" ?>" required>
              </div>

              <label class="label">Password:</label>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="Passwordlog" id="Passlog" placeholder="Enter your password" required>
              </div>
              <div class="show_pass">
                <input type="checkbox" onclick="Showpasslog()">&#32;Show Password
              </div>

              <div class="button input-box">
                <input value="Log in" type="submit" name="Login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label class="labels" for="flip">Sign up now</label></div>
            </div>
          </form>
        </div>

        <!-- Login end -->


        <!-- Sign up -->

        <div class="signup-form" id="signup-form">
          <form method="post" action="log/account.php" autocomplete="off">
            <div class="title">Sign up</div>
            <?php if (isset($_GET['errorsign'])) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_GET['errorsign']; ?>
              </div>
            <?php } ?>
            <div class="input-boxes">
              <label class="label">Email address:</label>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="Email" placeholder="Enter your Email" value="<?php echo (isset($_POST['Email'])) ? $_POST['Email'] : ""; ?>" required>
                <span class="validity"></span>
              </div>
              <label class="label">Password:</label>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="Password" id="Pass" placeholder="Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must have at least eight characters and at least one number, an uppercase letter, a lowercase letter, and a special character" required>
              </div>
              <label id="valid" style="color:red; font-size:13px; margin-bottom: 10px;" class="label"> </label>

              <div class="show_pass">
                <input type="checkbox" onclick="Showpass()">&#32;Show Password
              </div>

              <label class="label">First Name:</label>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" autocapitalize="words" name="First" placeholder="First Name" required value="<?php echo (isset($_POST['First'])) ? $_POST['First'] : ""; ?>">
              </div>

              <div class="container">
                <div class="row">
                  <div class="col">
                    <label class="label">Middle Name:</label>
                    <div class="input-box">
                      <i class="fas fa-user"></i>
                      <input type="text" autocapitalize="words" name="Middle" placeholder="Middle Name" required value="<?php echo (isset($_GET['Middle'])) ? $_GET['Middle'] : "" ?>">
                    </div>
                  </div>
                  <div class="col">
                    <label class="label">Last Name:</label>
                    <div class="input-box">
                      <i class="fas fa-user"></i>
                      <input type="text" autocapitalize="words" name="Last" placeholder="Last Name" required value="<?php echo (isset($_GET['Last'])) ? $_GET['Last'] : "" ?>">
                    </div>
                  </div>
                </div>
              </div>

              <input type="text" name="RoleType" hidden value="user">
              <label class="label">Address:</label>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="Address" autocapitalize="words" placeholder="Enter your Address" required value="<?php echo (isset($_GET['Address'])) ? $_GET['Address'] : "" ?>">
              </div>

              <label class="label">Contact Number:</label>
              <div class="input-box mb-4">
                <i class="fas fa-lock"></i>
                <input type="tel" name="PhoneNum" placeholder="09123456789" pattern="[0-9]{11}" maxlength="11" required value="<?php echo (isset($_GET['PhoneNum'])) ? $_GET['PhoneNum'] : "" ?>">
                <span class="validity"></span>
              </div>

              <div class="mb-3" style="margin-left: 28%;">
                <input type="text" class="captcha" id="captcha" name="captcha" value="<?php echo substr(uniqid(), 5); ?>">
              </div>

              <div class="input-box">
                <input type="text" name="confirmcaptcha" placeholder="Enter Captcha" minlength="8" maxlength="8" required value="">
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="consent" required>
                <label class="form-check-label" for="consent" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-placement="top" title="Please read and agree to the Terms and Conditions to proceed.">I agree to the Terms and Conditions</label>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Terms and Conditions</h1>
                    </div>
                    <div class="modal-body">
                      <h6>
                        <small>
                          SERVETSYO is committed to protecting the privacy and security of your personal information. This Privacy Policy outlines our practices for collecting, using, and safeguarding your data. Especially as it pertains to our website and services related to animal-related content. By using our services or visiting our website, you consent to the practices described in this Privacy Policy.
                          <br><br>
                          1. Information We Collect:
                          <br>
                          We collect various types of information, including but not limited to:
                          <br>
                          - Personal Information: This includes your name, email address, phone number, and any other information you voluntarily provide to us.
                          <br>
                          2. How We Use Your Data:
                          <br>
                          We use your information for the following purposes:
                          <br>
                          - To provide and improve our services.
                          <br>
                          - To send you updates and announcement, with your consent.
                          <br>
                          3. Data Security:
                          <br>
                          We employ reasonable security measures to protect your data from unauthorized access, disclosure, alteration, and destruction. While we strive to protect your personal information, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.
                          <br>
                          4. Data Retention:
                          <br>
                          We retain your data for as long as necessary to fulfill the purposes outlined in this Privacy Policy. You may request deletion of your data, subject to legal and regulatory requirements.
                          <br>
                          5. Sharing Your Information:
                          <br>
                          We do not sell or rent your personal information to third parties. However, we may share your data with partners, or affiliates who assist us in providing and improving our services.
                          <br>
                          6. Your Rights:
                          <br>
                          You have the right to:
                          <br>
                          - Access, correct, or delete your personal information.
                          <br>
                          - Object to or restrict the processing of your data.
                          <br>
                          - Withdraw consent if processing is based on your consent.
                          <br>
                          7. Children's Privacy:
                          <br>
                          Our services are not intended for individuals under the age of 18. If we become aware that we have collected data from a child under 18, we will take steps to delete the information.
                          <br>

                          9. Contact Us:
                          <br>
                          If you have any questions, concerns, or requests regarding your data or this Privacy Policy, please contact us at deanigaya@gmail.com.
                          <br><br>
                          By using our services, you agree to the practices outlined in this Privacy Policy. If you do not agree to these terms, please do not use our services.
                          <br>
                          SERVETSYO is committed to protecting your privacy, and we value your trust in us.
                        </small>
                      </h6>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Agree</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="button input-box">
                <input type="submit" value="Sign Up" onclick="Passvalid()" name="Sign_up">
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
  <?php include 'footer.php'; ?>
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

    $('#captcha').bind("cut copy paste", function(e) {
      e.preventDefault();
    });


    function Passvalid() {

      var x = document.getElementById("Pass").title;
      document.getElementById("valid").innerHTML = x;

    }

    setTimeout(function() {
      $('#valid').fadeOut('slow');
    }, 7000);
  </script>