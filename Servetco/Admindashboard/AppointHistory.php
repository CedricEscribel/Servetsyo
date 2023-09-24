<?php

require_once '../phpconfig/Schedule.php';

$sql = "SELECT * FROM schedule WHERE 1 ";
$all_schedule = $con->query($sql);


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Appointment</title>

	<?php include 'design/datatablelink.php'; ?>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link href="Admin.css" rel="stylesheet">

</head>

<body>

	<?php include 'design/header.php'; ?>
	<div class="wrapper">
		<?php include 'design/sidebar.php'; ?>
		<!-- Sidebar Holder -->


		<!-- History report malilipat sa taas na button (Medical reports) -->


		<section class="container tables">
			<h1>User list of Appointments History</h1>
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
							<td><?php echo $row["status"] ?></td>
						</tr>
					<?php
					}
					?>

				</tbody>
			</table>
		</section>

	</div>


	<?php include 'design/footer.php'; ?>
	<script>
		$(document).ready(function() {
			new DataTable('#table');
		});
	</script>
</body>

</html>