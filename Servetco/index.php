
<head>
    <meta charset="utf-8">
    <title>Agriculture </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="css/Design.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
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
                <button data-open-modal class="my-Button">Login</button>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->

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

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Latest Event</h6>
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
                                    <p>13th Low Cost Kapon in 𝐁𝐚𝐥𝐢𝐮𝐚𝐠, 𝐁𝐮𝐥𝐚𝐜𝐚n Location: Washko Laundromat, 63 F. Vergel De Dios St, Brgy. Concepcion</p>
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
                                    <p>Kasalukuyang nagsasagawa ng Pet Vaccination ang Baliwag Veterinary Services Division ng City Agriculture Office sa pakikipag-ugnayan ng SM Baliwag.</p>
                                    <a class="text-primary text-uppercase" id="vaccination">More<i class="bi bi-chevron-right"></i></a>
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
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>April 20, 2023 - PET VACCINATION 🐶🐱🐾 <br>
                Kasalukuyang nagsasagawa ng Pet Vaccination ang Baliwag Veterinary Services Division ng City Agriculture Office sa pakikipag-ugnayan ng SM Baliwag. <br> <br>
                Para sa mga nais mabakunahan ng Anti-Rabies vaccine ang kanilang mga alagang aso at pusa, magsadya lamang po sa PawPark Gl. ng SM Baliwag, 10:00am hanggang 5:00pm.</p>
        </div>

        </div>
        <!-- Modal end -->
    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <!-- Template Javascript -->
    
    <script>
        const openButton = document.querySelector("[data-open-modal]")
        const modal = document.querySelector("[data-modal]")
        
        openButton.addEventListener("click", () =>{
        modal.showModal()
        })
        
    </script>
    
    <script src="js/modal.js"></script>
</body>
