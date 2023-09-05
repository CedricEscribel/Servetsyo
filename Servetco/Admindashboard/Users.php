<?php
require '../phpconfig/login.php';


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>User List</title>

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
            <li>
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
            <li class="active">
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



  <!-- Main body design -->
  <section class="tables container">
      <div class="User-list">
        <h1>User List</h1>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Create Date</th>
            </tr>
          </thead>
          <tbody>
      <?php
      $i = 1;
      $rows = mysqli_query($con, "SELECT * FROM user ORDER BY user_id DESC")
      ?>
      <?php foreach ($rows as $row) : ?>
            <tr>
              <td><?php echo $row["user_id"] ?></td>
              <td><?php echo $row["Fullname"] ?></td>
              <td><?php echo $row["Email"] ?></td>
              <td><?php echo $row["PhoneNum"] ?></td>
              <td><?php echo $row["Address"] ?></td>
              <td><?php echo $row["CreateDate"] ?></td>
            </tr>
      <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
  </section>

  </div>
  </nav>
</div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

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