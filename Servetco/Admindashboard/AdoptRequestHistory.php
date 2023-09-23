<?php
require '../phpconfig/adoptionRequest.php';

$sql = "SELECT * FROM adoptionrequest";
$all_adoptionrequest = $con->query($sql);


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Adoption Request</title>

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

    <section class="tables container">
      <h1>Adoption Request History</h1>
      <table class="table" id="table">
        <thead>
          <tr class="head">
            <th>Full Name</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Dog Id</th>
            <th>Interview</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>

          <?php
          while ($row = $all_adoptionrequest->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $row["Fullname"] ?></td>
              <td><?php echo $row["PhoneNum"] ?></td>
              <td><?php echo $row["Address"] ?></td>
              <td><?php echo $row["Dog_id"] ?></td>
              <td><?php echo $row["Interview"] ?></td>
              <td><?php echo $row["Date"] ?></td>
              <td><?php echo $row["status"] ?></td>

          <?php
          }
          ?>

        </tbody>
      </table>
    </section>
  </div>
  </nav>


  </div>
  </div>

  <?php include 'design/footer.php'; ?>
  <script>
		$(document).ready(function() {
			new DataTable('#table');
		});
	</script>
</body>

</html>