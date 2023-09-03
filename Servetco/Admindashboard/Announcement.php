<?php
require '../phpconfig/events.php';

$sql = "SELECT * FROM events";
$all_events = $con->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Announcement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="../scss/main.css">
  	<link rel="stylesheet"  href="design.css">

</head>
<body>


<div class="sidenav">
    <a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
    <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
	  <a href="DogCatching.php"><i class="DogCatching"></i>Dog Catching</a>
    <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in Pound</a>      
	  <a href="Adoption.php"><i class="Animals"></i>Adoption</a>
    <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
    <a href="Users.php"><i class="users"></i>Users</a>
    <a href="Announcement.php" class="active"><i class="Announcement"></i>Announcement</a>
</div>



      <div class="AddAnnounce">

      <form class="img_prv" enctype="multipart/form-data" method="POST"  autocomplete="off">
         <div>

        <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
            <div class="image-preview">
              <img src="../img/adoption.jpg" alt="Upload Dog Picture" id="image-preview">
              <a href="#" id="choose-file-btn">Choose File</a>
            </div>
          </div>

				<div class="card-body">
				<div class="Details">
				  <input type="text" name="EventName" placeholder="Event Name"  required>
				</div>
        <div class="Details">
            <textarea rows="4" cols="23" id="message" name="Details" placeholder="Event details"></textarea>
			  </div>

			  	<input type="submit" name="submit" value="Upload">
				</div>
      </form>
      </div>

      <span class="border border-primary">
      <?php
      $i = 1;
      $rows = mysqli_query($con, "SELECT * FROM events ORDER BY id DESC")
      ?>
      <?php foreach ($rows as $row) : ?>
        
                <div class="col-lg-6 border border-primary">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                            <img src="EventsImg/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">                
                                    <h5 class="text-uppercase mb-3"><?php echo $row["EventName"] ?></h5>
                                    <p class="fw-lighter lh-lg"><?php echo $row["Details"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

      <?php endforeach; ?>  
    </span>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="Image.js"></script>
</body>
</html>
