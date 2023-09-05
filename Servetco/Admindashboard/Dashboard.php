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


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
          <a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
            </li>
            <li>
                <a href="DogCatching.php"><i class="DogCatching"></i>Dog Catching</a>
            </li>
            <li>
                <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in Pound</a>      
            </li>
            <li>
                <a href="Adoption.php"><i class="Animals"></i>Adoption</a>
            </li>
			<li>
                <a href="Adoption_Request.php" ><i class="AdoptRequest"></i>Adoption Request</a>
            </li>
			<li>
                <a href="ArtInsemination.php" ><i class="ArtInsemination"></i>Artificial Insemination</a>
            </li>
            <li>
                <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
            </li>
            <li>
                <a href="Users.php"><i class="users"></i>Users</a>
            </li>
            <li>
                <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
            </li>
        </ul>
    </nav>

        <!-- Page Content Holder -->
<div id="content">
			<button type="button" id="sidebarCollapse" class="navbar-btn">
				<span></span>
				<span></span>                        
				<span></span>
			</button>
			
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<!-- Content -->
			<div class="dashboard row container">
			<span class="borders">
				<div class="card" style="width: 18rem;">
					<img src="../img/spay.png" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h1 class="card-text"><?php echo $schedule ?></h1>
					</div>
				</div>
					<h2>Appointment</h2>
			</span>		
			
			<span class="borders">
				<div class="card " style="width: 18rem;">
					<img src="../img/catching.png" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h1 class="card-text"><?php echo $catch ?></h1>
					</div>
				</div>
					<h2>Dog catching</h2>
			</span>

			<span class="borders">
				<div class="card" style="width: 18rem;">
					<img src="../img/pound.png" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h1 class="card-text"><?php echo $dogs ?></h1>
					</div>
				</div>
					<h2>Dogs in Pound</h2>
			</span>

			<span class="borders">
				<div class="card" style="width: 18rem;">
					<img src="../img/adoption.jpg" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h1 class="card-text"><?php  echo $adoption?></h1>
					</div>
				</div>
					<h2>Adoption</h2>
			</span>

			<span class="borders">
				<div class="card" style="width: 18rem;">
					<img src="../img/medical.png" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h1 class="card-text"><?php echo $Rescue ?></h1>
					</div>
				</div>
					<h2>Animal Rescue</h2>
			</span>



			<span class="borders">
				<div class="card" style="width: 18rem;">
					<img src="../img/events.png" class="card-img-top" alt="...">
					<div class="card-body Count">
						<h1 class="card-text"><?php echo $Events ?></h1>
					</div>
				</div>
					<h3>Announcement & Events</h3>
			</span>
			</div>
		</div>
	</nav>
</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>
</html>
