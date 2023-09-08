<?php

require_once '../phpconfig/schedule.php';

$sql = "SELECT * FROM schedule";
$all_schedule = $con->query($sql);


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Appointment</title>

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
			<div class="Appointment">
				<h1>User list of Appointments</h1>
				<table class="table">
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
							<th>Request Date</th>
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
								<!-- TODO auto request date -->
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

					</tbody>
				</table>
			</div>
		</section>

	</div>

<?php include 'design/footer.php'; ?>
</body>

</html>