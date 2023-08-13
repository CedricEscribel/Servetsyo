<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


	<link rel="stylesheet"  href="design.css">
</head>
<body>


	<div class="sidenav">
	<a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
      <a href="Appointment.php"  class="active" ><i class="Appointment"></i>Appointment</a>
      <a href="Adoption.php"><i class="Animals"></i>Adoption</a>
      <a href="Medicalreports.php"><i class="Reports"></i>Medical Reports</a>
      <a href="Users.php"><i class="users"></i>Users</a>
      <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in pound</a>
      <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
      <a href="Events.php"><i class="Updates"></i>Events</a>
    </div>

		<section class="main">
			<div class="Appointment">
			  <h1>User List</h1>
			  <table class="table">
				<thead>
				  <tr>
					<th>ID</th>
					<th>Name</th>
					<th>Schedule Type</th>
					<th>Date</th>
					<th>Status</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>01</td>
					<td>Same David</td>
					<td>Neuter For dogs</td>
					<td>03-24-22</td>
					<td><label for="approval"></label>
						<select id="approval">
						  <option value="pending">Pending</option>
						  <option value="approved">Approved</option>
						  <option value="Done">Done</option>
						</select>
						</td>
				  </tr>
					<td>02</td>
					<td>Balbina Kherr</td>
					<td>Neuter For cats</td>
					<td>03-24-22</td>
					<td><label for="approval"></label>
						<select id="approval">
						  <option value="pending">Pending</option>
						  <option value="approved">Approved</option>
						  <option value="Done">Done</option>
						</select>
						</td>
				  </tr>
				  <tr>
					<td>03</td>
					<td>Badan John</td>
					<td>Spay (dogs)</td>
					<td>03-24-22</td>
					<td><label for="approval"></label>
						<select id="approval">
						  <option value="pending">Pending</option>
						  <option value="approved">Approved</option>
						  <option value="Done">Done</option>
						</select>
						</td>
				  </tr>
				  <tr>
					<td>04</td>
					<td>Sara David</td>
					<td>Spay (cats)</td>
					<td>03-24-22</td>
					<td><label for="approval"></label>
						<select id="approval">
						  <option value="pending">Pending</option>
						  <option value="approved">Approved</option>
						  <option value="Done">Done</option>
						</select>
						</td>
				  </tr>
				 
				</tbody>
			  </table>
			</div>
		  </section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="script.js"></script>
</body>
</html>
