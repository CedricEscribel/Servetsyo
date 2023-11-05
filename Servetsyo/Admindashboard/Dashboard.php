<?php
require '../phpconfig/count.php';


session_start();

if (isset($_SESSION['admin_id'])) {

	include "../Adminlog/adminsession.php";
	$user = getUserById($_SESSION['admin_id'], $conn);

?>

	<!DOCTYPE html>


	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Dashboard</title>
		<style>
			.containerchart {
				text-align: center;
				background-color: #f0f0f0;
				padding: 20px;
				border: 1px solid #333;
			}

			.bar-chart {
				display: flex;
				justify-content: space-between;
				align-items: flex-end;
				margin-top: 20px;
			}

			.bar-container {
				display: flex;
				flex-direction: column;
				align-items: center;
			}

			.bar {
				width: 30px;
				color: #fff;
				text-align: center;
			}

			.chart-label {
				font-weight: bold;
				margin-top: 5px;
			}



			.bar-1 {
				background-color: #3498db;
			}

			.bar-2 {
				background-color: #e74c3c;
			}

			.bar-3 {
				background-color: #27ae60;
			}

			.bar-4 {
				background-color: #f39c12;
			}

			.bar-5 {
				background-color: #9b59b6;
			}

			.bar-6 {
				background-color: #2ecc71;
			}

			.bar-7 {
				background-color: #34495e;
			}

			.bar-8 {
				background-color: #e67e22;
			}

			@media (max-width: 768px) {
				.bar {
					width: 20px;
				}
			}

			@media (max-width: 480px) {
				.bar {
					width: 10px;
				}
			}
		</style>

		<?php include 'design/header.php'; ?>



		<div class="wrapper">
			<!-- Sidebar Holder -->
			<?php include 'design/sidebar.php'; ?>
			<div class="container-fluid" style="overflow: hidden;">
				<!-- Content -->
				<div class="containerchart">
					<h1>Ano gagawin ko dito</h1>
					<div class="bar-chart">
						<?php
						$data = [$schedule, $catch, $dogs_pound, $dogs, $adoptionrequest, $insemination, $Rescue, $Events]; // Example data
						$labels = ['Appointment', 'Dog catching', 'Dogs in Pound', 'Dogs for Adoption', 'Adoption Request', 'Artificial Insemination', 'Animal Rescue', 'Announcement']; // Example labels
						$colors = ['bar-1', 'bar-2', 'bar-3', 'bar-4', 'bar-5', 'bar-6', 'bar-7', 'bar-8']; // Color classes
						$maxValue = max($data); // Find the maximum value for scaling
						foreach ($data as $key => $value) {
							$barHeight = ($value / $maxValue) * 200; // Scale the bars based on the maximum value
							echo '<div class="bar-container ' . $colors[$key] . '">';
							echo '<div class="bar" style="height: ' . $barHeight . 'px;">' . $value . '</div>';
							echo '<div class="chart-label">' . $labels[$key] . '</div>';
							echo '</div>';
						}
						?>
					</div>
				</div>

			</div>
		</div>


		</body>

		<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
		<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

	<?php } else {
	echo '<script>alert("Log in first")</script>';
	echo '<script>window.location.href = "login.php";</script>';
} ?>