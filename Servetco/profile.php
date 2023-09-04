<?php
//include auth_session.php file on all user panel pages
include("phpconfig/trylog.php");
include("phpconfig/trylog.php");

if (isset($_SESSION['id']) && isset($_SESSION['Email'])) {

$user = getUserById($_SESSION['id'], $con);

?>

<head>
        <meta charset="utf-8">
        <title>About </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
  	    <link href="css/bootstrap.min.css" rel="stylesheet">
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
    <!-- body -->
    <div class="container">
    <?php if ($user) { ?>
        <div class="main-body">    
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body-user">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <!-- name -->
                          <p>Hey, <?=$user['Email']?>!</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body-user">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?=$user['Fullname']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $_SESSION['Email']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Phone number
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Bay Area, San Francisco, CA
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-primary px-4" target="blank" href="EditProfile.php">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>    
                </div>
              </div>
        </div>
        <?php }else { 
        header("Location: login.php");
        exit;
       } ?>
    </div>
    <!-- body end -->

    
    <!-- footer -->
    <?php include 'footer.php';?>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
  <!-- Template Javascript --> 
    <script src="js/main.js"></script>
</body>

<?php }else {
	header("Location: login.php");
	exit;
} ?>