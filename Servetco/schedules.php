<?php
include "phpconfig/config.php";
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

  include "log/session.php";
  $user = getUserById($_SESSION['user_id'], $conn);


  $sql = "SELECT user.user_id, user.Fullname, user.Email, insemination.Animal 
FROM user 
INNER JOIN insemination
ON user.user_id=insemination.user_id
WHERE EXISTS (SELECT user_id FROM user WHERE user.user_id = insemination.user_id AND user_id = $user";



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
						<th>Breed</th>
						<th>Color</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Note</th>
						<th>Date Requested</th>
						<th>Status</th>					
					</tr>
				</thead>
				<tbody>


					<?php
					while ($row = $all_schedule->fetch_assoc()) {
					?>
						<tr>
							<td><?php echo $row["FullN"] ?></td>
							<td><?php echo $row["PhoneNum"] ?></td>
							<td><?php echo $row["Sched"] ?></td>
							<td><?php echo $row["PetName"] ?></td>
							<td><?php echo $row["Breed"] ?></td>
							<td><?php echo $row["Color"] ?></td>
							<td><?php echo $row["Age"] ?></td>
							<td><?php echo $row["Gender"] ?></td>
							<td><?php echo $row["Message"] ?></td>
							<td><?php echo $row["Date"] ?></td>
							<td><label for="approval"></label>
								<button class="btn btn-sm <?php echo $row['status'] == 'Approve' ? 'btn-success' : 'btn-danger' ?>" value="<?php echo $row["Schedule_id"] ?>" id="btnStatus">
									<?php echo $row["status"] ?>
								</button>
						</tr>


						<form action="../phpconfig/Schedule.php" method="post" hidden>

							<input type="hidden" name="id" id="id" value="<?php echo $row['Schedule_id'] ?>">
							<input type="hidden" name="hiddenStatus" id="<?php echo $row["Schedule_id"] ?>hiddenStatus" value="">
							<button type="submit" id="<?php echo $row["Schedule_id"] ?>" name="btnHideSubmit" hidden></button>
						</form>
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

