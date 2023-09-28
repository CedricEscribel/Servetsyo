<?php
require '../phpconfig/config.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>User List</title>


  <?php include 'design/datatablelink.php'; ?>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="Admin.css" rel="stylesheet">


</head>

<body>

  <?php include 'design/header.php'; ?>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <?php include 'design/sidebar.php'; ?>



    <!-- Main body design -->
    <section class="tables container">
      <h1>User List</h1>
      <table class="table" id="table">
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
          $rows = mysqli_query($con, "SELECT * FROM user")
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
    </section>
    </section>

  </div>
  </nav>
  </div>

  <?php include 'design/footer.php'; ?>
  <script>
		$(document).ready(function() {
			new DataTable('#table');
		});
	</script>
</body>

</html>