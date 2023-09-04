<?php
require '../phpconfig/rescue.php';


?>


<!DOCTYPE html>
<html>
<head>
	<title>Medical reports</title>

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
    <a href="AnimalRescue.php" class="active"><i class="AnimalRes active"></i>Animal Rescue</a>
    <a href="Users.php"><i class="users"></i>Users</a>
    <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
</div>



    <section class="main">
      <div class="Appointment">
        <h1>Animal Rescue</h1>
        <table class="Reports">
        <thead>
          <tr>
          <th>User Id</th>
          <th>Name</th>
          <th>Phone Number</th>
          <th>Details</th>
          <th>Date</th>
          <th>Status</th>
          </tr>
        </thead>
        <tbody>
      <?php
      $i = 1;
      $rows = mysqli_query($con, "SELECT * FROM rescue ORDER BY Rescue_id DESC")
      ?>
      <?php foreach ($rows as $row) : ?>
          <tr>
          <td><?php echo $row["Rescue_id"] ?></td>
          <td><?php echo $row["Name"] ?></td>
          <td><?php echo $row["ContactNum"] ?></td>
          <td><?php echo $row["Details"] ?></td>
          <td><?php echo $row["Rescue_id"] ?></td>
          <td><label for="approval"></label>
            <select id="approval">
              <option value="pending">Pending</option>
              <option value="approved">Approved</option>
              <option value="Done">Done</option>
            </select>
            </td>
          </tr>
      <?php endforeach; ?>
        </tbody>
        </table>
      </div>
    </section>
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>
</html>