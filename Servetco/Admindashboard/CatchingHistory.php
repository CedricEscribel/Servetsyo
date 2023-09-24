<?php

require_once '../phpconfig/Catching.php';

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

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link href="Admin.css" rel="stylesheet">


</head>

<body>

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
						<th>Contact Number</th>
						<th>Number of Dogs</th>
						<th>Notes</th>
						<th>Date</th>
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
							<td><?php echo $row["ContNum"] ?></td>
							<td><?php echo $row["DogCount"] ?></td>
							<td><?php echo $row["Notes"] ?></td>
							<td>Date</td>
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

</html>