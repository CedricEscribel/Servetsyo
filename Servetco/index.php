<?php 

require_once 'phpconfig/events.php';

$sql = "SELECT * FROM events";
$all_events = $con->query($sql);


?>


<head>
<meta charset="utf-8">
<title>Agriculture </title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">

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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Events.php" class="nav-item nav-link">Events</a>
                <a href="Login.php" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header -->
    <section class="bg-img ">
      <div class="container Landing bg-image"> </div>
        <div class="bg-txt">
            <h1>Baliwag Veterinary Services</h1>
            <p class="p-img">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, expedita impedit? Nam quod voluptates quae dolores, consectetur, doloribus sequi delectus perferendis magni ipsa quisquam aliquid voluptatem, et rem sapiente cum.
            </p>
        </div>
    </section>


    <!-- Events Start -->
    <div class="container-fluid py-5">
        <div class="blog container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class=" text-uppercase">Latest Event</h6>
                <h1 class="display-5 text-uppercase mb-0">Updates and Upcomming Event</h1>
            </div>

            <?php
            while ($row = $all_events->fetch_assoc()) {
            ?>

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
                                    <h5 class="text-uppercase mb-3"><?php echo $row["EventName"] ?></h5>
                                    <p class="fw-lighter lh-lg"><?php echo $row["Details"] ?></p>
                                    <a class="text-primary text-uppercase" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2F4m6FvVChFTxtPoHm9%3Ffbclid%3DIwAR3xj5e0hR-kuXnxKnS2giQjzsbcyV6q1fA0Er1zqqujdvLCiWS8Fitu7Q4&h=AT0OU1gD8HZPdgAM-NZDqG94GpwNg29EQIHwH2NLy2TSbc0T54MWvYEHvpwbgVlm14by8fgQS4EMMqF6g768U5TBUPmkULwVhmnfbGVJcRIBcLacTb-JYc38WmqMAX2Av0nv8VcYgq_AmlSQzokh&__tn__=-UK-y-R&c[0]=AT36xcGpUFt4j6GH0i1o4nb9hMprsVkZTJr7aALXl_3Vrr7zKwbDLKj01AQeA4j31oD6Me6AtkRKxV7p8Hj9IDl6IsnLYrAig8-RrSCXqHEeX4hX4HmAOrprx_2HsJue41phrr_w87LFAnh_tOlFrpxQ7fgoCq4KXQ3Troao0n_cpPXElAG4T8aqZZWRgoNfUEIJgEtqkIGdmVUdfp-JiB4L29h9ZGYd4k3V">Register here<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
               ?>

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
    <!-- Events End -->
     <!-- Services Start -->
     <?php include 'services.php';?>

    <!-- Services End -->



    <!-- Footer Start -->
    <?php include 'footer.php';?>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
  <!-- Template Javascript --> 
    <script src="js/main.js"></script>
</body>
