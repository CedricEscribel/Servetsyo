<?php
include "phpconfig/config.php";
session_start();


$userid = $_SESSION['user_id'];




?>

<head>
  <meta charset="utf-8">
  <?php include 'Admindashboard/design/datatablelink.php'; ?>

  <title> Schedules </title>
  <link rel="icon" href="img/icon.png" type="image/x-icon">

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
          <?php include 'AccountDrop.php'; ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <!-- body -->

  <?php if ($user) { ?>
    <input type="hidden" name="50" id="id" value="<?php echo $user['user_id'] ?>">
  <?php }  ?>

  <div class="container">
    <h1>User list of Appointments</h1>
    <table class="table" id="table">
      <thead>
        <tr class="head">
          <th>Service</th>
          <th>Date Requested</th>
          <th>Status</th>
          <th>Scheduled Date</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $i = 1;
        $rows = mysqli_query($con, "SELECT * FROM insemination where user_id = '$userid'")
        ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>Artificial Insemination</td>
            <td><?php echo $row["ReqDate"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td><?php echo $row["SetDate"] ?></td>
          </tr>
        <?php endforeach; ?>

        <?php
        $i = 1;
        $rows = mysqli_query($con, "SELECT * FROM adoptionrequest where user_id = '$userid'")
        ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td>Dog adoption</td>
            <td><?php echo $row["Date"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td><?php echo $row["SetDate"] ?></td>
          </tr>
        <?php endforeach; ?>

        <?php
        $i = 1;
        $rows = mysqli_query($con, "SELECT * FROM schedule where user_id = '$userid'")
        ?>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td><?php echo $row["Sched"] ?></td>
            <td><?php echo $row["Date"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td><?php echo $row["SetDate"] ?></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
  <!-- body end -->
  <!-- footer -->
  <?php include 'footer.php'; ?>

  <script>
    $(document).ready(function() {
      new DataTable('#table');
    });
  </script>


</body>