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
      <a href="Adoption.php"  class="active" ><i class="Animals"></i>Adoption</a>
      <a href="Medicalreports.php"><i class="Reports"></i>Medical Reports</a>
      <a href="Users.php"><i class="users"></i>Users</a>
      <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in pound</a>
      <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
      <a href="Events.php"><i class="Updates"></i>Events</a>
    </div>

    <div class="main">
        <div class="header">
          <h1>Upload Dogs for adoption</h1>
        </div>
      <!-- Body design -->
      
      <!-- Upload dog for adoption -->

	  		<span class="border">
				<div class="card" >
				<form enctype="multipart/form-data">
            <input type="file" id="image-file" name="image" accept="image/*" style="display: none">
            <div class="image-preview">
              <img src="../Dogs sample/sample dog.jpg" alt="Upload Dog Picture" id="image-preview">
              <a href="#" id="choose-file-btn">Choose File</a>
            </div>
        </form>
					<div class="card-body">
					<div class="Details">
              <textarea rows="4" cols="23" id="message" name="message" placeholder="Additional details"></textarea>
				</div>

				<div class="Details">
				<input type="text" placeholder="Breed"  required>
				</div>
				<div class="Details">
				<input type="text" placeholder="Age"  required>
				</div>
				<div class="Details">
				<input type="text" placeholder="Days in poud"  required>
				</div>
				<input type="submit" value="Upload">
					</div>
				</div>
			</span>
      <!-- Upload dog for adoption -->

      <!-- body -->
            <div class="header">
              <h2>Dogs For adoption</h2>
            </div>
              <div class="grid">
              <div class="Dog-details">
                  <div class="image-preview">
                    <img src="/Dogs sample/sample dog.jpg" alt="Image Preview" id="image-preview">
                  </div>
                  <div class="Details">
                    <h2>Dog name</h2>
                    <p>Sample dogs</p>
                  </div>
              </div>
              <div class="Dog-details">
                <div class="image-preview">
                  <img src="/Dogs sample/sample dog.jpg" alt="Image Preview" id="image-preview">
                </div>
                <div class="Details">
                  <h2>Dog name</h2>
                  <p>Sample dogs</p>
                </div>
            </div>
            <div class="Dog-details">
              <div class="image-preview">
                <img src="/Dogs sample/sample dog.jpg" alt="Image Preview" id="image-preview">
              </div>
              <div class="Details">
                <h2>Dog name</h2>
                <p>Sample dogs</p>
              </div>
          </div>
          <div class="Dog-details">
            <div class="image-preview">
              <img src="/Dogs sample/sample dog.jpg" alt="Image Preview" id="image-preview">
            </div>
            <div class="Details">
              <h2>Dog name</h2>
              <p>Sample dogs</p>
            </div>
          </div>   
        </div>
      </div>
      <!-- Body design -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="scriptt.js"></script>
</body>
</html>
