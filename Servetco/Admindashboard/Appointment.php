<!DOCTYPE html>
<html>
<head>
	<title>Schedules</title>
	<link rel="stylesheet"  href="design.css">
</head>
<body>
	<div class="sidenav">
      <h1 >Dashboard</h1>
      <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
      <a href="Adoption.php" class="active" ><i class="Animals"></i>Adoption</a>
      <a href="Medicalreports.php"><i class="Reports"></i>Medical Reports</a>
      <a href="Users.php"><i class="users"></i>Users</a>
      <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in pound</a>
      <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
      <a href="Events.php"><i class="Updates"></i>Events</a>
    </div>

		<section class="User">
			<div class="User-list">
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
					<td>Sam David</td>
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
		</section>


	<script src="script.js"></script>
</body>
</html>
