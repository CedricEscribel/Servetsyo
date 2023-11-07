<?php
include_once "phpconfig/config.php";
session_start();



require_once 'phpconfig/events.php';

$sql = "SELECT * FROM events";
$all_events = $con->query($sql);

$limit = "SELECT * FROM events LIMIT 2;";
$recent_events = $con->query($limit);
?>

<head>
    <meta charset="utf-8">
    <title>Events </title>
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
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Events.php" class="nav-item nav-link active">Events</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                    <?php include 'AccountDrop.php'; ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Events Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Events list Start -->
            <div class="col-lg-8">
                <?php
                while ($row = $all_events->fetch_assoc()) {
                ?>
                    <div class="blog-item mb-5">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img src="./Admindashboard/EventsImg/<?php echo $row["image"]; ?>" width=200 title="<?php echo $row['image']; ?>">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-2">
                                        <small><i class="bi bi-calendar-date me-2"></i><?php echo $row["Dates"] ?></small>
                                    </div>
                                    <h5 class="text-uppercase mb-1"><?php echo $row["EventName"] ?></h5>
                                    <p class="fw-lighter lh-lg"><?php echo $row["Details"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                <?php } ?>

            </div>
            <!-- Events list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Recent Post</h3>
                    <?php
                    while ($row = $recent_events->fetch_assoc()) {
                    ?>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid" src="./Admindashboard/EventsImg/<?php echo $row["image"]; ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0"><?php echo $row["EventName"] ?></a>
                        </div>
                    <?php } ?>

                </div>
                <!-- Recent Post End -->


                <!-- Image Start -->
                <div class="mb-5">
                    <img  class="img-fluid rounded">
                </div>
                <!-- Image End -->

            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Events End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

</body>