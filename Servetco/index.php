
<head>
    <meta charset="utf-8">
    <title>Agriculture </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/Customstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand ms-lg-5" style="color: #378ACA; font-weight: bold; ">
           <img src="img/logo.jpg"  class="img-fluid" style="width: 90px; height: ms-auto;" alt="..." >
           SERVETSYO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Pet_needs.php" class="nav-item nav-link">Pet needs</a>
                <button class="my-Button" data-bs-target="#SignIn" data-bs-toggle="modal">Login</button>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Login -->
    <div class="modal fade" id="SignIn" aria-hidden="true" aria-labelledby="SignInLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="SignInLabel">Sign In</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form class="row g-3">
              <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <button class="btn btn-primary" id="Login">Log In</button>
            </form>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#Signup" data-bs-toggle="modal">Sign up</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Signup" aria-hidden="true" aria-labelledby="SignupLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="SignupLabel">Sign Up</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <button class="btn btn-primary" id="Login">Log In</button>
            
            </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#SignIn" data-bs-toggle="modal">Sign In</button>
      </div>
    </div>
  </div>
</div>


    <!-- login -->
    <dialog data-modal>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
            </form>
        </dialog>
    <!-- login end -->

    <!-- Header -->
    <section class="bg-img ">

      <div class="container Landing bg-image">
        <div class="p-3 mb-2 bg-transparent text-body">
          <div>
            <h1>Baliwag Veterinary Services</h1>
            <p class="lead my-4">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, expedita impedit? Nam quod voluptates quae dolores, consectetur, doloribus sequi delectus perferendis magni ipsa quisquam aliquid voluptatem, et rem sapiente cum.
            </p>
          </div>
        </div>
      </div>
      
    </section>


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="blog container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class=" text-uppercase">Latest Event</h6>
                <h1 class="display-5 text-uppercase mb-0">Updates and Upcomming Event</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="img/Neuter.jpg" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="bi bi-calendar-date me-2"></i>15 May, 2023</small>
                                    </div>                 
                                    <h5 class="text-uppercase mb-3">13th Low Cost Kapon</h5>
                                    <p class="fw-lighter lh-lg">13th Low Cost Kapon in Baliuag, Bulacan Location: Washko Laundromat, 63 F. Vergel De Dios St, Brgy. Concepcion</p>
                                    <a class="text-primary text-uppercase" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2F4m6FvVChFTxtPoHm9%3Ffbclid%3DIwAR3xj5e0hR-kuXnxKnS2giQjzsbcyV6q1fA0Er1zqqujdvLCiWS8Fitu7Q4&h=AT0OU1gD8HZPdgAM-NZDqG94GpwNg29EQIHwH2NLy2TSbc0T54MWvYEHvpwbgVlm14by8fgQS4EMMqF6g768U5TBUPmkULwVhmnfbGVJcRIBcLacTb-JYc38WmqMAX2Av0nv8VcYgq_AmlSQzokh&__tn__=-UK-y-R&c[0]=AT36xcGpUFt4j6GH0i1o4nb9hMprsVkZTJr7aALXl_3Vrr7zKwbDLKj01AQeA4j31oD6Me6AtkRKxV7p8Hj9IDl6IsnLYrAig8-RrSCXqHEeX4hX4HmAOrprx_2HsJue41phrr_w87LFAnh_tOlFrpxQ7fgoCq4KXQ3Troao0n_cpPXElAG4T8aqZZWRgoNfUEIJgEtqkIGdmVUdfp-JiB4L29h9ZGYd4k3V">Register here<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="img/vaccination.jpg" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="bi bi-calendar-date me-2"></i>01 June, 2023</small>
                                    </div>
                                    <h5 class="text-uppercase mb-3">Pet Vaccination</h5>
                                    <p class="fw-lighter lh-lg">Kasalukuyang nagsasagawa ng Pet Vaccination ang Baliwag Veterinary Services Division ng City Agriculture Office sa pakikipag-ugnayan ng SM Baliwag.</p>
                                    <a class="text-primary text-uppercase" role="button" data-bs-toggle="modal"  data-bs-target="#myModal" aria-expanded="false"  id="vaccination">More<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- The Modal -->
                <div class="modal fade" id="myModal" aria-hidden="true" aria-labelledby="myModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="myModal">Modal 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>April 20, 2023 - PET VACCINATION 🐶🐱🐾 <br>
                Kasalukuyang nagsasagawa ng Pet Vaccination ang Baliwag Veterinary Services Division ng City Agriculture Office sa pakikipag-ugnayan ng SM Baliwag. <br> <br>
                Para sa mga nais mabakunahan ng Anti-Rabies vaccine ang kanilang mga alagang aso at pusa, magsadya lamang po sa PawPark Gl. ng SM Baliwag, 10:00am hanggang 5:00pm.</p>         
               </div>
            </div>
        </div>
        </div>
        <!-- Modal end -->
        
     <!-- Services Start -->
   <div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-0">Our Services</h1>
        </div>
        <div class="row g-5">
            
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <div>
                        <h5 class="text-uppercase mb-3">Adoption Form</h5>
                        <p>Fill out the form to adopt</p>
                        <a class="text-primary text-uppercase" href="Adoption.php">Adoption form<i class="bi bi-chevron-right
                        "></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <div>
                        <h5 class="text-uppercase mb-3">Schedule form</h5>
                        <p>Application form for Vaccination and Kapon</p>
                        <a class="text-primary text-uppercase" href="schedule.php">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Rescue</h5>
                        <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Services End -->



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
    <script src="js/main.js"></script>
</body>
