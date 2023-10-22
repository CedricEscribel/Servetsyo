<?php

require_once '../phpconfig/Catching.php';

session_start();

if (isset($_SESSION['admin_id'])) {

	include "../Adminlog/adminsession.php";
	$user = getUserById($_SESSION['admin_id'], $conn);


	$sql = "SELECT * FROM catch";
	$all_catch = $con->query($sql);


?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Dog Catching</title>


		<?php include 'design/datatablelink.php'; ?>


		<?php include 'design/header.php'; ?>

		<div class="wrapper">
			<!-- Sidebar Holder -->

			<?php include 'design/sidebar.php'; ?>

			<section class="tables container">
				<h1>Dog Catching Request History</h1>
				<table class="table" id="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Barangay</th>
							<th>Full Name</th>
							<th>Contact Number</th>
							<th>Number of Dogs</th>
							<th>Notes</th>
							<th>Date Requested</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>


						<?php
						while ($row = $all_catch->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo $row["DogCatch_id"] ?></td>
								<td><?php echo $row["BarangayID"] ?></td>
								<td><?php echo $row["Fullname"] ?></td>
								<td><?php echo $row["ContNum"] ?></td>
								<td><?php echo $row["DogCount"] ?></td>
								<td><?php echo $row["Notes"] ?></td>
								<td><?php echo $row["ReqDate"] ?></td>
								<td><?php echo $row["status"] ?></td>

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