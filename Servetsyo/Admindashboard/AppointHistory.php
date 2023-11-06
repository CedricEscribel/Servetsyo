<?php

require_once '../phpconfig/Schedule.php';

session_start();

if (isset($_SESSION['admin_id'])) {

	include "../Adminlog/adminsession.php";
	$user = getUserById($_SESSION['admin_id'], $conn);


	$sql = "SELECT * FROM schedule ";
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

		<?php include 'design/header.php'; ?>
		<div class="wrapper">
			<?php include 'design/sidebar.php'; ?>
			<!-- Sidebar Holder -->


			<!-- History report malilipat sa taas na button (Medical reports) -->


			<section class="container tables">
				<div class="  d-flex flex-row align-items-center justify-content-between">
					<h1>User list of Appointments History</h1>
					<div class="card-tools" style="float: right;">
						<a href="Export/ScheduleExport.php" target="_blank" class="btn btn-sm btn-primary" style="background-color: #4caf50; border: none;">Generate PDF</a>
					</div>
				</div>

				<table class="table" id="table">
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Contact Number</th>
							<th>Appointment</th>
							<th>Animal</th>
							<th>Pet's Name</th>
							<th>Breed</th>
							<th>Color</th>
							<th>Age</th>
							<th>Gender</th>
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
								<td><?php echo $row["Animal"] ?></td>
								<td><?php echo $row["PetName"] ?></td>
								<td><?php echo $row["Breed"] ?></td>
								<td><?php echo $row["Color"] ?></td>
								<td><?php echo $row["Age"] ?></td>
								<td><?php echo $row["Gender"] ?></td>
								<td><?php echo $row["Date"] ?></td>
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

	<?php } else {
	echo '<script>alert("Log in first")</script>';
	echo '<script>window.location.href = "login.php";</script>';
} ?>