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
    <a href="Events.php"><i class="Updates"></i>Event</a>
</div>



  <!-- Main body design -->
  <div class="main">
    <div class="header">
      <h1>User List</h1>
		</div>
    <div class="request-record">
      <div class="request-record-header">
        <div class="request-record-title">User request</div>
        <div class="request-record-status">
          <span class="status-label">Status:</span>
          <select class="status-dropdown" onchange="changeStatus(this)">
            <option value="pending">Pending</option>
            <option value="in-progress">In Progress</option>
            <option value="completed">Completed</option>
          </select>
        </div>
      </div>
        <div class="user-details">
          <div class="user-avatar">
            <img src="/img/IDsample.jpg" alt="User Avatar">
          </div>
          <div class="user-info">
            <div class="user-name">John Doe</div>
            <div class="user-email">johndoe@example.com</div>
          </div>
     </div>
    </div>
    <div class="request-record">
      <div class="request-record-header">
        <div class="request-record-title">User request</div>
        <div class="request-record-status">
          <span class="status-label">Status:</span>
          <select class="status-dropdown" onchange="changeStatus(this)">
            <option value="pending">Approve</option>
            <option value="in-progress">In Progress</option>
            <option value="completed">Denied</option>
          </select>
        </div>
      </div>
        <div class="user-details">
          <div class="user-avatar">
            <img src="/img/IDsample.jpg" alt="User Avatar">
          </div>
          <div class="user-info">
            <div class="user-name">John Doe</div>
            <div class="user-email">johndoe@example.com</div>
          </div>
     </div>
    </div>
    
    </div>


    <section class="User">
      <div class="User-list">
        <h1>User List</h1>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Phone Number</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>01</td>
              <td>Sam David</td>
              <td>091234568</td>
              <td>03-24-22</td>
              <td><button>View</button></td>
            </tr>
              <td>02</td>
              <td>Balbina Kherr</td>
              <td>091234568</td>
              <td>03-24-22</td>
              <td><button>View</button></td>
            </tr>
            <tr>
              <td>03</td>
              <td>Badan John</td>
              <td>091234568</td>
              <td>03-24-22</td>
              <td><button>View</button></td>
            </tr>
            <tr>
              <td>04</td>
              <td>Sara David</td>
              <td>091234568</td>
              <td>03-24-22</td>
              <td><button>View</button></td>
            </tr>
            <tr >
              <td>05</td>
              <td>Salina</td>
              <td>091234568</td>
              <td>03-24-22</td>
              <td><button>View</button></td>
            </tr>
            <tr >
              <td>06</td>
              <td>Tara Smith</td>
              <td>091234568</td>
              <td>03-24-22</td>
              <td><button>View</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </section>

    <!-- Main body design -->
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

    <script src="script.js"></script>
</body>
</html>
