<?php 

require_once '../phpconfig/Dogs.php';

$sql = "SELECT * FROM dogs";
$all_dogs = $con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Dog Details</title>
	  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet"  href="design.css">
</head>
<body>

    <div class="sidenav">
      <a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
      <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
	    <a href="DogCatching.php"><i class="DogCatching"></i>Dog Catching</a>
      <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in Pound</a>      
	    <a href="Adoption.php" class="active"><i class="Animals Active"></i>Adoption</a>
      <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
      <a href="Users.php"><i class="users"></i>Users</a>
      <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
      <a href="Events.php"><i class="Updates"></i>Event</a>
    </div>

    <div class="main">
        <div class="header">
          <h1>Upload Dogs for adoption</h1>
        </div>
      <!-- Body design -->
      
      <!-- Upload dog for adoption -->

	  		<span class="border">
				<div class="card" >
        
				<form class="img_prv" enctype="multipart/form-data" method="POST" action="../phpconfig/Dogs.php">
         
         <div>
        <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
            <div class="image-preview">
              <img src="../img/adoption.jpg" alt="Upload Dog Picture" id="image-preview">
              <a href="#" id="choose-file-btn">Choose File</a>
            </div>
          </div>

				<div class="card-body">
        <div class="Details">
            <textarea rows="4" cols="23" id="message" name="DogInfo" placeholder="Additional details"></textarea>
			  </div>
				<div class="Details">
				  <input type="text" name="Name" placeholder="Name"  required>
				</div>
				<div class="Details">
			  	<input type="text" name="Age" placeholder="Age"  required>
				</div>
				<div class="Details">
			  	<input type="text" name="Gender" placeholder="Gender"  required>
				</div>
				<div class="Details">
			  	<input type="text" name="CatchLocation" placeholder="Catch location"  required>
				</div>
			  	<input type="submit" name="save" value="Upload">
				</div>
      </form>

				</div>
        
			</span>
      <!-- Upload dog for adoption -->

      <!-- body -->
            <div class="header">
              <h2>Dogs For adoption</h2>
            </div>
              <div class="grid">

              <!-- while($row = mysqli_fetch_assoc($all_dogs_details)){ -->
            <?php
            while ($row = $all_dogs->fetch_assoc()) {
            ?>

              <div class="Dog-details">
                  <div class="image-preview">
                    <img src="" alt="Image Preview" id="image-preview">
                  </div>
                  <div class="Details">
                    <h3><?php echo $row["Name"] ?></h3>
                    <p>AGE: Approx. <?php echo $row["Age"]?> years old </p>                    
                    <p><?php echo $row["Gender"] ?></p>    
                    <p><?php echo $row["DogInfo"] ?></p>                    
                  </div>
              </div>

              <?php
            }
               ?>
        </div>
      </div>
      <!-- Body design -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="Image.js"></script>
</body>
</html>
