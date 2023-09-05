<?php
require '../phpconfig/count.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		<link rel="stylesheet"  href="design.css">
</head>
<body>
	<!-- Appointment, Dog catching, dogs in pound, adoption, animal rescue, user , announcement, event -->
	<div class="sidenav">
	<a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
      <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
	  <a href="DogCatching.php"><i class="DogCatching"></i>Dog Catching</a>
      <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in Pound</a>      
	  <a href="Adoption.php"><i class="Animals"></i>Adoption</a>
      <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
      <a href="Users.php"><i class="users"></i>Users</a>
      <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
    </div>



	<div class="main container text-center">
		<div class="header ">
			<h1>Welcome to your dashboard!</h1>
		</div>

		<div class="dashboard row ">


			<span class="border border-3 border-success-subtle">
				<div class="card" style="width: 18rem;">
					<img src="../img/spay.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h1 class="card-text"><?php echo $schedule ?></h1>
					</div>
				</div>
					<h2>Appointment</h2>
			</span>		
			
			<span class="border border-3 border-success-subtle">
				<div class="card " style="width: 18rem;">
					<img src="../img/catching.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h1 class="card-text"><?php echo $catch ?></h1>
					</div>
				</div>
					<h2>Dog catching</h2>
			</span>

			<span class="border border-3 border-success-subtle">
				<div class="card" style="width: 18rem;">
					<img src="../img/pound.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h1 class="card-text"><?php echo $dogs ?></h1>
					</div>
				</div>
					<h2>Dogs in Pound</h2>
			</span>

			<span class="border border-3 border-success-subtle">
				<div class="card" style="width: 18rem;">
					<img src="../img/adoption.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h1 class="card-text"><?php  echo $adoption?></h1>
					</div>
				</div>
					<h2>Adoption</h2>
			</span>

			<span class="border border-3 border-success-subtle">
				<div class="card" style="width: 18rem;">
					<img src="../img/medical.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h1 class="card-text"><?php echo $Rescue ?></h1>
					</div>
				</div>
					<h2>Animal Rescue</h2>
			</span>



			<span class="border border-3 border-success-subtle">
				<div class="card" style="width: 18rem;">
					<img src="../img/events.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h1 class="card-text"><?php echo $Events ?></h1>
					</div>
				</div>
					<h3>Announcement & Events</h3>
			</span>
		</div>
	</div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="script.js"></script>
</body>
</html>
