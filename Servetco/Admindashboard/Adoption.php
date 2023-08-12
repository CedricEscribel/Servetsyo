<!DOCTYPE html>
<html>
<head>
	<title>Dog Details</title>
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

  <div class="main">
    <div class="header">
      <h1>Upload Dogs for adoption</h1>
		</div>
  <!-- Body design -->
  <!-- Upload dog for adoption -->
    <div class="Upload">
      <form enctype="multipart/form-data">
        <input type="file" id="image-file" name="image" accept="image/*" style="display: none">
        <div class="image-preview">
          <img src="" alt="Upload Dog Picture" id="image-preview">
          <a href="#" id="choose-file-btn">Choose File</a>
        </div>
        <div class="Details">
          <textarea rows="5" cols="25" id="message" name="message" placeholder="Additional details"></textarea>
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
      </form>
    </div>
      <!-- Upload dog for adoption -->
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

  <!-- Body design -->
    </div>
	<script src="scriptt.js"></script>
</body>
</html>
