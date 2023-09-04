<?php 

require_once '../phpconfig/schedule.php';

$sql = "SELECT * FROM schedule";
$all_schedule = $con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


	<link rel="stylesheet"  href="design.css">
</head>
<body>


<div class="sidenav">
    <a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
    <a href="Appointment.php" class="active"><i class="Appointment"></i>Appointment</a>
	<a href="DogCatching.php"><i class="DogCatching"></i>Dog Catching</a>
    <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in Pound</a>      
	<a href="Adoption.php"><i class="Animals"></i>Adoption</a>
    <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
    <a href="Users.php"><i class="users"></i>Users</a>
    <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
</div>


	<!-- History report malilipat sa taas na button (Medical reports) -->
		<section class="main">
			<div class="Appointment">
			  <h1>User List</h1>
			  <table class="table">
				<thead>
				  <tr>
					<th>ID</th>
					<th>Name</th>
					<th>Contact Number</th>
					<th>Appointment</th>
					<th>Date</th>
					<th>Note</th>
					<th>Status</th>
				  </tr>
				</thead>
				<tbody>


					<?php
						while ($row = $all_schedule->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo $row["Schedule_id"] ?></td>
								<td><?php echo $row["FullN"] ?></td>
								<td><?php echo $row["PhoneNum"] ?></td>                    
								<td><?php echo $row["Sched"] ?></td>  
								<td><?php echo $row["Date"] ?></td>                      
								<td><?php echo $row["Message"] ?></td>     
								<td><label for="approval"></label>
								<select id="approval">
								<option value="pending">Pending</option>
								<option value="approved">Approved</option>
								<option value="Done">Done</option>
								</select>               
						</tr>				

						<?php
						}
						?>
				
				</tbody>
			  </table>
			</div>
		  </section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="script.js"></script>
</body>
</html>
