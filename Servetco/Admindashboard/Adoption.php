<?php
require '../phpconfig/dogs.php';


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="Admin.css" rel="stylesheet">


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
          <a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
            </li>
            <li>
                <a href="DogCatching.php"><i class="DogCatching"></i>Dog Catching</a>
            </li>
            <li>
                <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in Pound</a>      
            </li>
            <li class="active">
                <a href="Adoption.php"><i class="Animals"></i>Adoption</a>
            </li>
			<li>
                <a href="Adoption_Request.php" ><i class="AdoptRequest"></i>Adoption Request</a>
            </li>
			<li>
                <a href="ArtInsemination.php" ><i class="ArtInsemination"></i>Artificial Insemination</a>
            </li>
            <li>
                <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
            </li>
            <li>
                <a href="Users.php"><i class="users"></i>Users</a>
            </li>
            <li>
                <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
            </li>
        </ul>
    </nav>

        <!-- Page Content Holder -->
<div id="content">
			<button type="button" id="sidebarCollapse" class="navbar-btn">
				<span></span>
				<span></span>                        
				<span></span>
			</button>
			
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">

      <div>
          <div class="header">
            <h1>Upload Dogs for Adoption</h1>
          </div>
        <!-- Body design -->
        
        <!-- Upload dog for adoption -->
<!-- TODO: Add pictures -->
        <span class="border card mb-3">
          <div class="Upload" >
            <form class="img_prv" enctype="multipart/form-data" method="POST"  autocomplete="off">     
              <div>
                <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                  <div class="image-preview">
                    <img src="../img/adoption.jpg" alt="Upload Dog Picture" id="image-preview">
                    <a href="#" id="choose-file-btn">Choose Images</a>
                  </div>
              </div>

              <div class="Informations">
              <div class="Details">
                <input type="text" name="Name" placeholder="Name"  required>
              </div>
              <div class="Details">
                <input type="text" name="Age" placeholder="Age"  required>
              </div>
              <div class="Details">
                <input type="text" name="Gender" placeholder="Gender"  required>
              </div>
              <div class="Details" style="margin-left: 3px;">
                  <textarea rows="3" cols="24" id="message" name="DogInfo" placeholder="Additional details"></textarea>
              </div>
                <input type="submit" name="submit" value="Upload">
              </div>
            </form>
          </div>
        </span>
        <!-- Upload dog for adoption end -->
        <!-- TODO: Editable post -->
        <span class="border">
          <div class="Dog-details">
            <?php
            $i = 1;
            $rows = mysqli_query($con, "SELECT * FROM dogs ORDER BY Dog_id DESC")
            ?>
            <?php foreach ($rows as $row) : ?>
              
               <div class="Dog-details">
                        <div class="image-preview">
                          <img src="img/<?php echo $row["image"]; ?>" width = 180 title="<?php echo $row['image']; ?>">
                        </div>
                        <div class="Details">
                          <h2><?php echo $row["Name"] ?></h2>
                          <p><?php echo $row["Gender"] ?></p>                   
                          <p><?php echo $row["Age"] ?></p>                                    
                          <p><?php echo $row["DogInfo"] ?></p>                   
                        </div>
                </div>

              <?php endforeach; ?>
            </div>   
          </span>
      </div>

    </div>
  </nav>
</div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

    <script src="Image.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>
</html>