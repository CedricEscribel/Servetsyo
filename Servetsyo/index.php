<?php 

require_once 'phpconfig/events.php';

$sql = "SELECT * FROM events";
$all_events = $con->query($sql);


?>


<head>
<meta charset="utf-8">
<title>Agriculture </title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="REOJaKma"></script> 

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
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                    <?php include 'AccountDrop.php'; ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header -->
    <section class="bg-img ">

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="max-width: 970px;">
    <div class="carousel-item active">
      <img src="image/april.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/dean.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/randel.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbaliwagvetservice&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>    
    </section>


    <!-- Events Start -->
    <div class="container-fluid py-5">
        <div class="blog container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class=" text-uppercase">Latest Event</h6>
                <h1 class="display-5 text-uppercase mb-0">Updates and Upcomming Event</h1>
            </div>



            <div class="row g-5">
                      <?php
            while ($row = $all_events->fetch_assoc()) {
            ?>      
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                            <img src="Admindashboard/EventsImg/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="bi bi-calendar-date me-2"></i><?php echo $row["Dates"] ?></small>
                                    </div>                 
                                    <h5 class="text-uppercase mb-3"><?php echo $row["EventName"] ?></h5>
                                    <p class="fw-lighter lh-lg"><?php echo $row["Details"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
               ?>
            </div>
        </div>
    </div>
  
        <!-- The Modal -->
        <div class="modal fade" id="myModal" aria-hidden="true" aria-labelledby="myModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <!-- Id mymodal be change to id of events  -->
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

</body>
