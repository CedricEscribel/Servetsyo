<?php 

require_once '../phpconfig/Dogs.php';

$sql = "SELECT * FROM dogs";
$all_dogs = $con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Dogs in Pound</title>
	  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet"  href="design.css">
</head>
<body>

<div class="sidenav">
    <a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
    <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
	  <a href="DogCatching.php"><i class="DogCatching"></i>Dog Catching</a>
    <a href="Dogs_in_pound.php" class="active"><i class="Dogs"></i>Dogs in Pound</a>      
	  <a href="Adoption.php"><i class="Animals"></i>Adoption</a>
    <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
    <a href="Users.php"><i class="users"></i>Users</a>
    <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
</div>

   <section class="Dogs-in-pound">
      <div class="User-list">
        <h1>Dogs in pound</h1>
        <table class="table">
          <thead>
            <tr class="head" >
              <th>ID</th> 
              <th>Name</th>
              <th>Date in</th>
              <th>Age</th>
              <th>Location</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

          <?php
						while ($row = $all_dogs->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo $row["id"] ?></td>
								<td><?php echo $row["Name"] ?></td>
								<td><?php echo $row["Days"] ?></td>                    
								<td><?php echo $row["Age"] ?></td>                   
								<td><?php echo $row["CatchLocation"] ?></td>       
                <td><label for="Status"></label>
								<select id="Status">
								<option value="Adopted">Adopted</option>
								<option value="Euthanized">Euthanized</option>
								<option value="Claimed">Claimed</option>
								</select>              
						</tr>				

						<?php
						}
						?>

          </tbody>
        </table>
      </div>
    </section>
  </section>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="scriptt.js"></script>
</body>
</html>