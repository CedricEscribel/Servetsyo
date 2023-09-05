<?php 

require_once '../phpconfig/Catching.php';

$sql = "SELECT * FROM catch";
$all_schedule = $con->query($sql);


?>

<head>
    <meta charset="utf-8">
    <title>Dog Catching </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

    <link rel="stylesheet" href="../css/Schedule.css">
    <link rel="stylesheet" href="../scss/main.css">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="../index.php" class="navbar-brand ms-lg-5">
        <img src="../img/logo.jpg"  class="img-fluid" style="width: 90px; height: ms-auto;" alt="..." >
        </a>    
        <h2 style="margin-top: 18px; color: #378ACA; font-weight: bold;">SERVETSYO</h2>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="../index.php" class="nav-item nav-link">Home</a>
                <a href="../about.php" class="nav-item nav-link">About</a>
                <a href="../service.php" class="nav-item nav-link">Service</a>
                <a href="../Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="../Events.php" class="nav-item nav-link">Events</a>
                <a href="Login.php" class="nav-item nav-link">Login</a>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->

<!-- Schedule form start -->
    <div class="Schedule_form">
          <h1>Dog Catching Request</h1>

        <form method="post" action="../phpconfig/Catching.php">
          <div class="form">

          <label for="Barangay">Barangay: </label>
            <label for="Barangay"></label>
            <select name="BarangayID">
                <option value="-">Choose Barangay</option>
                <option value="Barangca">Barangca</option>
                <option value="Paitan">Paitan</option>
                <option value="Piel">Piel</option>
            </select>    
  
          <label for="Number">Contact Number:</label>
          <input type="text" id="number" name="ContNum" placeholder="Contact Number">

          <label for="Number">Number of Dogs:</label>
          <input type="text" id="number" name="DogCount" placeholder="Number of Dogs">


          <label for="Notes">Notes:</label>
          <textarea id="Notes" name="Notes" placeholder="" ></textarea>

<!--TODO: copy button from adoption -->

            <input type="submit"   name="save" value="Submit">

          </div>
        </form>
      </div>
      
    <!-- Schedule form end -->

    <!-- Footer Start -->
    <div class="footer container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>AgriCoop Building, Baliwag Government Complex, DRT Highway, Baliuag, Philippines</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>baliwag.gov.ph</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>0923 304 7360</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-body mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-body mb-2" href="Petforadoption.php"><i class="bi bi-arrow-right text-primary me-2"></i>Pet for adoption</a>
                        <a class="text-body" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>                   
                        <a class="text-body mb-2" href="Admindashboard/Dashboard.php"><i class="bi bi-arrow-right text-primary me-2"></i>Admin Dashboard link sample</a>
                    </div>
                    </div>
               
            </div>
        </div>
    </div>  
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
  <!-- Template Javascript --> 
    <script src="../js/main.js"></script>

    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

</script>
</body>
