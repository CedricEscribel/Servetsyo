<!DOCTYPE html>
<html>
<head>
	<title>Announcement</title>
	  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   
    <link rel="stylesheet" href="../css/main.css">
  	<link rel="stylesheet"  href="design.css">
</head>
<body>

    <div class="sidenav">
      <style> .Announcement:Active{
      }  </style>

    <a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
      <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
      <a href="Adoption.php" ><i class="Animals"></i>Adoption</a>
      <a href="Medicalreports.php"><i class="Reports"></i>Medical Reports</a>
      <a href="Users.php"><i class="users"></i>Users</a>
      <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in pound</a>
      <a href="Announcement.php" class="Announcement"><i class="Announcement"></i>Announcement</a>
      <a href="Events.php"><i class="Updates"></i>Events</a>
    </div>

      <div class="AddAnnounce">

        <div class="card" style="width: 30rem;">
          <form class="Addpic" enctype="multipart/form-data">
            <input type="file" id="image-file" name="image" accept="image/*" style="display: none">
            <div class="image-preview">
              <img src="../img/upload.jpg" alt="Upload Dog Picture" id="image-preview">
              <a href="#" id="choose-file-btn">Choose File</a>
            </div>
          </form>

            <div class="card-body Imgprev">
              <textarea rows="1" cols="25" id="message" name="message" placeholder="Announcement"></textarea>
              <textarea rows="4" cols="25" id="message" name="message" placeholder="Announcement details"></textarea>
              <a href="#" class="btn btn-primary">Upload Announcement</a>
          </div>
        </div>
      </div>

      <div class="Announcements">

    <div class="card" style="width: 18rem;">
     <img src="../img/Neuter.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
     </div>
    </div>

    <div class="card" style="width: 18rem;">
     <img src="../img/Neuter.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
     </div>
    </div>

    <div class="card" style="width: 18rem;">
     <img src="../img/Neuter.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
     </div>
    </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="scriptt.js"></script>
</body>
</html>
