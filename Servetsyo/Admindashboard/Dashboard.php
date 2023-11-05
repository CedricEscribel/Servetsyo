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
            border: 1px solid #333; /* Add a border around the entire bar chart */
			margin-bottom: 3%;
        }

<<<<<<< Updated upstream
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
			transform: rotate(-90deg); 
        }



        .bar-1 { background-color: #3498db; }
        .bar-2 { background-color: #e74c3c; }
        .bar-3 { background-color: #27ae60; }
        .bar-4 { background-color: #f39c12; }
        .bar-5 { background-color: #9b59b6; }
        .bar-6 { background-color: #2ecc71; }
        .bar-7 { background-color: #34495e; }
        .bar-8 { background-color: #e67e22; }

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
=======
		<script>
			window.onload = function() {

				var dataPoints = [];

				var chart = new CanvasJS.Chart("chartContainer", {
					animationEnabled: true,
					exportEnabled: true,
					title: {
						text: "Tuna Production"
					},
					axisY: {
						title: "In metric tons"
					},
					data: [{
						type: "column",
						toolTipContent: "{y} metric tons",
						dataPoints: dataPoints
					}]
				});

				$.get("https://canvasjs.com/data/gallery/php/tuna-production.csv", getDataPointsFromCSV);

				//CSV Format
				//Year,Volume
				function getDataPointsFromCSV(csv) {
					var csvLines = points = [];
					csvLines = csv.split(/[\r?\n|\r|\n]+/);
					for (var i = 0; i < csvLines.length; i++) {
						if (csvLines[i].length > 0) {
							points = csvLines[i].split(",");
							dataPoints.push({
								label: points[0],
								y: parseFloat(points[1])
							});
						}
					}
					chart.render();
				}

			}
		</script>
>>>>>>> Stashed changes

		<?php include 'design/header.php'; ?>



		<div class="wrapper">
			<!-- Sidebar Holder -->
			<?php include 'design/sidebar.php'; ?>
			<div class="container-fluid" style="overflow: hidden;">
				<!-- Content -->

<<<<<<< Updated upstream
				<div class="containerchart">
        <h1>Ano gagawin ko dito</h1>
        <div class="bar-chart">
            <?php
            $data = [100, 150, 75, 120, 90, 80, 60, 40]; // Example data
            $labels = ['Label A', 'Label B', 'Label C', 'Label D', 'Label E', 'Label F', 'Label G', 'Label H']; // Example labels
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
=======
				<div id="chartContainer" style="height: 370px; width: 100%;"></div>
>>>>>>> Stashed changes

				<div class="dashboard container">
					<span class="borders">
						<div class="card mb-2" style="max-width: 430px;">
							<div class="row g-6">
								<div class="col-md-4">
									<img src="./design/images/Appointment.webp" class="card-img-top" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body count">
										<h3>Appointment</h3>
										<h2 class="card-text"><?php echo $schedule ?></h2>
									</div>
								</div>
							</div>
						</div>
					</span>

					<span class="borders">
						<div class="card mb-2" style="max-width: 430px;">
							<div class="row g-6">
								<div class="col-md-4">
									<img src="./design/images/DogCatching.webp" class="card-img-top" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body count">
										<h3>Dog catching</h3>
										<h2 class="card-text"><?php echo $catch ?></h2>
									</div>
								</div>
							</div>
						</div>
					</span>

					<span class="borders">
						<div class="card mb-2" style="max-width: 430px;">
							<div class="row g-6">
								<div class="col-md-4">
									<img src="./design/images/DogsInPound.webp" class="card-img-top" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body count">
										<h3>Dogs in Pound</h3>
										<h2 class="card-text"><?php echo $dogs_pound ?></h2>
									</div>
								</div>
							</div>
						</div>
					</span>

					<span class="borders">
						<div class="card mb-2" style="max-width: 430px;">
							<div class="row g-6">
								<div class="col-md-4">
									<img src="./design/images/Adoption.webp" class="card-img-top" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body count">
										<h3>Dogs for Adoption</h3>
										<h2 class="card-text"><?php echo $dogs ?></h2>
									</div>
								</div>
							</div>
						</div>
					</span>
					<span class="borders">
						<div class="card mb-2" style="max-width: 430px;">
							<div class="row g-6">
								<div class="col-md-4">
									<img src="./design/images/AdoptRequest.webp" class="card-img-top" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body count">
										<h4>Adoption Request</h4>
										<h2 class="card-text"><?php echo $adoptionrequest ?></h2>
									</div>
								</div>
							</div>
						</div>
					</span>

					<span class="borders">
						<div class="card mb-2" style="max-width: 430px;">
							<div class="row g-6">
								<div class="col-md-4">
									<img src="./design/images/ArtInsem.webp" class="card-img-top" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body count">
										<h4>Artificial Insemination</h4>
										<h2 class="card-text"><?php echo $insemination ?></h2>
									</div>
								</div>
							</div>
						</div>
					</span>

					<span class="borders">
						<div class="card mb-2" style="max-width: 430px;">
							<div class="row g-6">
								<div class="col-md-4">
									<img src="./design/images/AnimalRescue.webp" class="card-img-top" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body count">
										<h3>Animal Rescue</h3>
										<h2 class="card-text"><?php echo $Rescue ?></h2>
									</div>
								</div>
							</div>
						</div>
					</span>



					<span class="borders">
						<div class="card mb-2" style="max-width: 430px;">
							<div class="row g-6">
								<div class="col-md-4">
									<img src="./design/images/Announcement.jpg" class="card-img-top" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body count">
										<h3>Announcement</h3>
										<h2 class="card-text"><?php echo $Events ?></h2>
									</div>
								</div>
							</div>
						</div>
					</span>

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
