<!DOCTYPE html>
<html>
<head>
	<title>Users list</title>
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

	<script src="script.js"></script>
</body>
</html>
