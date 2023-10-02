<?php
require '../phpconfig/count.php';

?>

<!DOCTYPE html>
<html style="overflow: hidden;">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Dashboard</title>


	<?php include 'design/header.php'; ?>

	<div class="wrapper">
		<!-- Sidebar Holder -->
		<?php include 'design/sidebar.php'; ?>
		<div class="container-fluid" style="    overflow: hidden;">
			<!-- Content -->

			<div class="dashboard container">

				<span class="borders">
					<div class="card mb-4" style="max-width: 500px;">
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
					<div class="card mb-4" style="max-width: 500px;">
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
					<div class="card mb-4" style="max-width: 500px;">
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
					<div class="card mb-4" style="max-width: 500px;">
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
					<div class="card mb-4" style="max-width: 500px;">
						<div class="row g-6">
							<div class="col-md-4">
								<img src="./design/images/AdoptRequest.webp" class="card-img-top" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body count">
									<h3>Adoption Request</h3>
									<h2 class="card-text"><?php echo $adoptionrequest ?></h2>
								</div>
							</div>
						</div>
					</div>
				</span>

				<span class="borders">
					<div class="card mb-4" style="max-width: 500px;">
						<div class="row g-6">
							<div class="col-md-4">
								<img src="./design/images/ArtInsem.webp" class="card-img-top" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body count">
									<h3>Artificial Insemination</h3>
									<h2 class="card-text"><?php echo $insemination ?></h2>
								</div>
							</div>
						</div>
					</div>
				</span>

				<span class="borders">
					<div class="card mb-4" style="max-width: 500px;">
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
					<div class="card mb-4" style="max-width: 500px;">
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
	<!-- jQuery CDN - Slim version (=without AJAX) -->


	</body>

</html>