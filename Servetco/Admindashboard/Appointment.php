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
		<!-- Sidebar Holder -->

		<?php include 'design/sidebar.php'; ?>

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
									<button class="btn btn-sm btn-danger" value="<?php echo $row["Schedule_id"] ?>" id="btnStatus">
										<?php echo $row["Status"] ?>

									</button>
							</tr>

						<?php
						}
						?>

					</tbody>
				</table>
			</div>
		</section>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

	<!-- axios script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js" integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


	<script type="text/javascript">
		$(document).ready(function() {

			// const swalWithBootstrapButtons = Swal.mixin({
			// 	customClass: {
			// 		confirmButton: "btn btn-success mx-1",
			// 		cancelButton: "btn btn-danger",
			// 	},
			// 	buttonsStyling: false,
			// });

			$(document).on('click', '#btnStatus', function(e) {
				e.preventDefault();
				var id = event.target.value;


				Swal.fire({
					title: 'Do you want to approve the request?',
					showDenyButton: true,
					showCancelButton: true,
					confirmButtonText: 'Approve',
					denyButtonText: `Decline`,
				}).then((result) => {
					/* Read more about isConfirmed, isDenied below */
					if (result.isConfirmed) {

						axios({
							method: "post",
							url: "http://localhost/Servetsyo-main/Servetco/phpconfig/Schedule.php",
							data: id,
						}).catch((error) => console.log(error));

					
					} else if (result.isDenied) {
						Swal.fire('Changes are not saved', '', 'info')
					}
				})
			});



		});
	</script>
</body>

</html>