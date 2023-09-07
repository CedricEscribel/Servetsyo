<?php
require '../phpconfig/count.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="Admin.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
	<?php include 'design/header.php'; ?>
    <div class="wrapper">
        <!-- Sidebar Holder -->
	<?php include 'design/sidebar.php'; ?>
		<div class="container-fluid">
		<!-- Content -->
			<div class="dashboard row container">
				
			<span class="borders">
				<div class="card dash" >
					<img src="./design/images/Appointment.webp" class="card-img-top" alt="...">
					<div class="card-body Count">			
						<h3>Appointment</h3>
						<h2 class="card-text"><?php echo $schedule ?></h2>
					</div>
				</div>

			</span>		
			
			<span class="borders">
				<div class="card dash">
					<img src="./design/images/DogCatching.webp" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h3>Dog catching</h3>
						<h3 class="card-text"><?php echo $catch ?></h3>
					</div>
				</div>
	
			</span>

			<span class="borders">
				<div class="card dash">
					<img src="./design/images/DogsInPound.webp" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h3>Dogs in Pound</h3>
						<h2 class="card-text"><?php echo $dogs ?></h2>
					</div>
				</div>
			</span>

			<span class="borders">
				<div class="card dash" >
					<img src="./design/images/Adoption.webp" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h3>Adoption</h3>
						<h2 class="card-text"><?php  echo $adoption?></h2>
					</div>
				</div>
			</span>
			<span class="borders">
				<div class="card dash">
					<img src="./design/images/AdoptRequest.webp" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h3>Adoption Request</h3>
						<h3 class="card-text"><?php echo $catch ?></h3>
					</div>
				</div>
	
			</span>

			<span class="borders">
				<div class="card dash">
					<img src="./design/images/ArtInsem.webp" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h3>Artificial Insemination</h3>
						<h2 class="card-text"><?php echo $dogs ?></h2>
					</div>
				</div>
			</span>

			<span class="borders">
				<div class="card dash" >
					<img src="./design/images/AnimalRescue.webp" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h2>Animal Rescue</h2>
						<h2 class="card-text"><?php echo $Rescue ?></h2>
					</div>
				</div>
			</span>



			<span class="borders">
				<div class="card dash" >
					<img src="./design/images/Announcement.jpg" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h4>Announcement & Events</h4>
						<h2 class="card-text"><?php echo $Events ?></h2>
					</div>
				</div>
			</span>
			</div>
		</div>
</div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
	
</body>
</html>
