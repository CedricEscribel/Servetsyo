<?php

require_once 'phpconfig/config.php';


?>


<head>
  <meta charset="utf-8">
  <title>Dogs For Adoption </title>
  <link rel="icon" href="img/icon.png" type="image/x-icon">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php include 'header.php'; ?>
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
        <a href="about.php" class="nav-item nav-link">About</a>
        <a href="service.php" class="nav-item nav-link">Service</a>
        <a href="Petforadoption.php" class="nav-item nav-link active">adoption</a>
        <a href="Events.php" class="nav-item nav-link">Events</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
          <?php include 'AccountDrop.php'; ?>
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

      <section style="background-color: #eee;">
        <div class="text-center container py-5">
          <div class="row">
            <?php
            $i = 1;
            $rows = mysqli_query($con, "SELECT * FROM dogs_info where status='adoption'")
            ?>
            <?php foreach ($rows as $row) : ?>

              <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                  <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                    <img src="Admindashboard/DogImage/<?php echo $row["image"]; ?>" width=200 title="<?php echo $row['image']; ?>">
                  </div>
                  <div class="text-body-secondary mt-3">
                    <a class="text-reset text-decoration-none">
                      <h5 class="card-title mb-3"><?php echo $row["description"] ?></h5>
                    </a>
                    <a class="text-reset text-decoration-none">
                      <p><?php echo $row["gender"] ?></p>
                      <p><?php echo $row["age"] ?> Months old</p>
                    </a>
                    <h6 class="mb-3"><?php echo $row["dog_info"] ?></h6>
                  </div>

                  <form action="./services/Adoption.php" method="post">
                    <input type="hidden" value="<?php echo $row["dog_id"] ?>" name="dog_id">
                    <button type="submit" class="btn btn-primary" style="color: white; width: 200px;" name="Adopt_dog">Adopt</button>
                  </form>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
      </section>

    </div>
  </div>

  <!-- Dog for adoption End -->

  <!-- Footer Start -->
  <?php include 'footer.php'; ?>
  <!-- Footer End -->

</body>