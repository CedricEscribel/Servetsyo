<?php

require_once '../phpconfig/Catching.php';

session_start();

if (isset($_SESSION['admin_id'])) {

	include "../Adminlog/adminsession.php";
	$user = getUserById($_SESSION['admin_id'], $conn);


	$sql = "SELECT * FROM catch where status='pending' ";
	$all_catch = $con->query($sql);


?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Dog Catching</title>

		<?php include 'design/header.php'; ?>

		<div class="wrapper">
			<!-- Sidebar Holder -->

			<?php include 'design/sidebar.php'; ?>

			<section class="tables container">
				<h1>Dog Catching Request</h1>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Barangay</th>
							<th>Full Name</th>
							<th>Contact Number</th>
							<th>Number of Dogs</th>
							<th>Notes</th>
							<th>Date Requested</th>
							<th>Set Date</th>
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
								<td>
									<form action="../phpconfig/Catching.php" method="POST">
										<input type="date" id="dt" name="SetDate" value="<?php echo $row['SetDate'] ?>">
										<input type="hidden" name="id" id="id" value="<?php echo $row['DogCatch_id'] ?>">
										<button name="setdate"> <i class="bi bi-calendar2-check"></i></button>
									</form>
								</td>
								<td><label for="approval"></label>
									<button class="btn btn-sm <?php echo $row['status'] == 'Approve' ? 'btn-success' : 'btn-danger' ?>" value="<?php echo $row["DogCatch_id"] ?>" id="btnStatus">
										<?php echo $row["status"] ?>
									</button>
							</tr>

							<form action="../phpconfig/Catching.php" method="post" hidden>

								<input type="hidden" name="id" id="id" value="<?php echo $row['DogCatch_id'] ?>">
								<input type="hidden" name="hiddenStatus" id="<?php echo $row["DogCatch_id"] ?>hiddenStatus" value="">
								<button type="submit" id="<?php echo $row["DogCatch_id"] ?>" name="btnHideSubmit" hidden></button>
							</form>

						<?php
						}
						?>

					</tbody>
				</table>
			</section>
		</div>


		<?php include 'design/footer.php'; ?>
		</body>

	<?php } else {
	echo '<script>alert("Log in first")</script>';
	echo '<script>window.location.href = "login.php";</script>';
} ?>


	<script>
		document.getElementById('dt').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
	</script>