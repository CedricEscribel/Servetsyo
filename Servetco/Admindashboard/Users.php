<?php
require '../phpconfig/login.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Users list</title>
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
  	<a href="Adoption.php"><i class="Animals"></i>Adoption</a>
    <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
    <a href="Users.php" class="active"><i class="users"></i>Users</a>
    <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
</div>



  <!-- Main body design -->
  <section class="User">
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

    <!-- Main body design -->
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>
</html>
