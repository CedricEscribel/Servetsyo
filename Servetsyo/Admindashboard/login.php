

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login</title>
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="../css/Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a class="navbar-brand ms-lg-5" style="display: flex;">
            <img src="../img/logo.jpg" class="img-fluid" style="width: 80px; height: ms-auto;" alt="...">
            <div style="display: flex; ">
                <h2 style="margin-top: 18px; color: #378ACA; font-weight: bold;">SER</h2>
                <h2 style="margin-top: 18px; color: #4caf50; font-weight: bold;">VET</h2>
                <h2 style="margin-top: 18px; color: #378ACA; font-weight: bold;">SYO</h2>
            </div>
        </a>
    </nav>

    <div class="LoginContainer">
        <div class="cover">
            <div class="front">
                <img src="../img/baliuag highfve.jpg" alt="">
            </div>
        </div>
        <!-- Login -->
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Admin Login</div>
                    <form action="../Adminlog/AdminLog.php" method="POST" autocomplete="off">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']; ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['success'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET['success']; ?>
                            </div>
                        <?php } ?>

                        <div class="input-boxes">
                            <label class="label">Username:</label>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="Usernamelog" placeholder="Enter your Email" value="<?php echo (isset($_GET['Usernamelog'])) ? $_GET['Usernamelog'] : "" ?>" required>
                            </div>

                            <label class="label">Password:</label>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="Passwordlog" id="Pass" placeholder="Enter your password" required>
                            </div>
                            <div class="show_pass">
                                <input type="checkbox" onclick="Showpass()">&#32;Show Password
                            </div>

                            <div class="button input-box">
                                <input value="Log in" type="submit" name="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>