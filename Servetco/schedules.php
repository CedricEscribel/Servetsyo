<?php
include "phpconfig/config.php";
session_start();

$userid48 = '47';

$userid = $userid48;

$sql = "SELECT user.user_id, user.Fullname, user.Email, insemination.Animal \n"

  . "FROM user \n"

  . "INNER JOIN insemination\n"

  . "ON user.user_id=insemination.user_id\n"
  . "WHERE user.user_id = $userid;";

$all_schedule = $con->query($sql);

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

  include "log/session.php";
  $user = getUserById($_SESSION['user_id'], $conn);



?>

  <head>
    <meta charset="utf-8">
    <title> Schedules </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Login.css">
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
          <a href="about.php" class="nav-item nav-link ">About</a>
          <a href="service.php" class="nav-item nav-link">Service</a>
          <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
          <a href="Events.php" class="nav-item nav-link">Events</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Account</a>
            <div class="dropdown-menu m-0">
              <a href="profile.php" class="dropdown-item active">Profile</a>
              <a href="schedules.php" class="dropdown-item ">Schedules</a>
              <a href="login.php" class="dropdown-item">Login</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
    <!-- body -->

    <?php if ($user) { ?>


                  <p>Hey, <?= $user['Fullname'] ?>!</p>


    <?php }  ?>


    <div class="container">
      <section class="container tables">
        <h1>User list of Appointments</h1>
        <table class="table" id="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Contact Number</th>
              <th>Appointment</th>
              <th>Pet's Name</th>

            </tr>
          </thead>
          <tbody>


            <?php
            while ($row = $all_schedule->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $row["user_id"] ?></td>
                <td><?php echo $row["Fullname"] ?></td>
                <td><?php echo $row["Email"] ?></td>
                <td><?php echo $row["Animal"] ?></td>

              </tr>

            <?php
            }
            ?>

    </div>
    <!-- body end -->


    <!-- footer -->
    <?php include 'footer.php'; ?>

  </body>

<?php } else {
  header("Location: login.php");
  exit;
} ?>