<?php 

require_once 'phpconfig/config.php';


?>


<head>
  <meta charset="utf-8">
  <title>Dogs For Adoption </title>
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
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link active">adoption</a>
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
          <!--Dog for adoption Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
      <h6 class="text-primary text-uppercase">Dogs to adopt</h6>
      <h1 class="display-5 text-uppercase mb-0">Dogs Ready for Adoption</h1>
    </div>

       <div class="grid">
              <div class="Dog-details">
            <?php
                $i = 1;
                $rows = mysqli_query($con, "SELECT * FROM dogs ORDER BY Dog_id DESC")
                ?>            
            <?php foreach ($rows as $row) : ?>
                <div class="card Dogpic" style="width: 18rem;">
                  <div id="<?php echo $row["Dog_id"] ?>" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#<?php echo $row["Dog_id"] ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                       <img src="Admindashboard/img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $row["Dog_id"] ?>" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $row["Dog_id"] ?>" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                  <div class="card-body" style="width: max-content;">
                    <h3 class="card-title"><?php echo $row["Name"] ?></h3>
                    <h5 class="card-title"><?php echo $row["Gender"] ?></h5>
                    <h5 class="card-title"><?php echo $row["Age"] ?></h5>
                    <h5 class="card-title"><?php echo $row["DogInfo"] ?></h5>

                    <a href="services/Adoption.php" style="color: white; width: 200px; " class="btn btn-primary">Adopt</a>
                  </div>
                </div>
                <?php endforeach; ?>
            </div>   
        </div>
  </div>
</div>
        <!-- Dog for adoption End -->

    <!-- Footer Start -->
    <?php include 'footer.php';?>  
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
  <!-- Template Javascript --> 
    <script src="js/main.js"></script>
</body>
