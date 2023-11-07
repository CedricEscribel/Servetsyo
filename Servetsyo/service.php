<?php
include_once "phpconfig/config.php";
session_start();


?>

<head>
    <meta charset="utf-8">
    <title>Service </title>
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
                <a href="service.php" class="nav-item nav-link active">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Events.php" class="nav-item nav-link">Events</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                    <?php include 'AccountDrop.php'; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Services Start -->
    <?php include 'services.php'; ?>
    <!-- Services End -->


    <!-- Petneeds Start -->
    <!-- Need to be editable in admin side -->
    <div id="Petneeds" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <div class="Pet-needs text-center">
                    <h2>DONATIONS FOR RESCUED ANIMAL</h2>
                    <p>We only accept in-kind donations</p>
                    <li>Dog food</li>
                    <li>Cat food</li>
                    <li>cages</li>
                    <li>Dog treats</li>
                    <li>Leashes, harnesses and collars</li>
                </div>
            </div>
            <div class="carousel-item">
                <div class="Pet-needs text-center">
                    <h2>SHELTER WISH LIST</h2>
                    <li>Detergent powder and bleach</li>
                    <li>Garbage bags (XXL)</li>
                    <li>Clinic supplies (alcohol, cotton, etc.)</li>
                    <li>Old newspapers</li>
                    <li>Toilet paper</li>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#Petneeds" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn-primary" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#Petneeds" data-bs-slide="next">
                <span class="carousel-control-next-icon btn-primary" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Pet needs End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

</body>