<?php

include_once '../phpconfig/config.php';


?>


<head>
    <meta charset="utf-8">
    <title>Adoption </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

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
                <a href="../Login.php" class="nav-item nav-link">Login</a>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->

<!-- Adoption form start -->
<!-- Personal data must be automaticaly put on adoption field -->
    <div class="container">
            <div class="title">Application form</div>
                <div class="content">
                <form action="#">
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" id="Fullname" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" placeholder="Enter your Address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" required>
                    </div>
<!-- TODO: Gender to be delete and change to( do you find a dog to adopt on the page?)  -->
                  <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                        <option value="">-- Select Gender --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        </select>
                    </div>
                
                        <div class="Radio">
                            <p>Will you be able to visit the office for the interview?</p>
                            <input type="radio" name="Yes" >
                            <label for="Yes">Yes</label><br>            
                            <input type="radio" name="No" required>
                            <label for="No">No</label><br>

                        </div>  
                        <div class="input-box">
                            <span class="details">Interview and Visitation (Minors must be accompanied by parents) </span>
                            <input type="text" placeholder="Preffered date and time for virtual meet" required>
                        </div>
                        </div>
                        

                    <div class="button">
                        <input type="submit" value="Submit Form">
                    </div>
                 </form>
            </div> 
        </div>
      
    <!-- Adoption form end -->







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
                        <a class="text-body mb-2" href="../index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="../about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-body mb-2" href="../service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-body mb-2" href="../Petforadoption.php"><i class="bi bi-arrow-right text-primary me-2"></i>Pet for adoption</a>
                        <a class="text-body" href="../contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>                   
                        <a class="text-body mb-2" href="../Admindashboard/Dashboard.php"><i class="bi bi-arrow-right text-primary me-2"></i>Admin Dashboard link sample</a>
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
</body>


