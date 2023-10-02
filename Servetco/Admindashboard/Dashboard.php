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
					<div class="card dash">
						<img src="./design/images/Appointment.webp" class="card-img-top" alt="...">
						<div class="card-body Count">
							<h4>Appointment</h4>
							<h3 class="card-text"><?php echo $schedule ?></h3>
						</div>
					</div>

				</span>

				<span class="borders">
					<div class="card dash">
						<img src="./design/images/DogCatching.webp" class="card-img-top" alt="...">
						<div class="card-body Count">
							<h4>Dog catching</h4>
							<h3 class="card-text"><?php echo $catch ?></h3>
						</div>
					</div>

				</span>

				<span class="borders">
					<div class="card dash">
						<img src="./design/images/DogsInPound.webp" class="card-img-top" alt="...">
						<div class="card-body Count">
							<h4>Dogs in Pound</h4>
							<h3 class="card-text"><?php echo $dogs_pound ?></h3>
						</div>
					</div>
				</span>

				<span class="borders">
					<div class="card dash">
						<img src="./design/images/Adoption.webp" class="card-img-top" alt="...">
						<div class="card-body Count">
							<h4>Dogs for Adoption</h4>
							<h3 class="card-text"><?php echo $dogs ?></h3>
						</div>
					</div>
				</span>
				<span class="borders">
					<div class="card dash">
						<img src="./design/images/AdoptRequest.webp" class="card-img-top" alt="...">
						<div class="card-body Count">
							<h4>Adoption Request</h4>
							<h3 class="card-text"><?php echo $adoptionrequest ?></h3>
						</div>
					</div>

				</span>

				<span class="borders">
					<div class="card dash">
						<img src="./design/images/ArtInsem.webp" class="card-img-top" alt="...">
						<div class="card-body Count">
							<h4>Artificial Insemination</h4>
							<h3 class="card-text"><?php echo $insemination ?></h3>
						</div>
					</div>
				</span>

				<span class="borders">
					<div class="card dash">
						<img src="./design/images/AnimalRescue.webp" class="card-img-top" alt="...">
						<div class="card-body Count">
							<h4>Animal Rescue</h4>
							<h3 class="card-text"><?php echo $Rescue ?></h3>
						</div>
					</div>
				</span>



				<span class="borders">
					<div class="card dash">
						<img src="./design/images/Announcement.jpg" class="card-img-top" alt="...">
						<div class="card-body Count">
							<h4>Announcement</h4>
							<h3 class="card-text"><?php echo $Events ?></h3>
						</div>
					</div>
				</span>
			</div>
		</div>
	</div>
	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>