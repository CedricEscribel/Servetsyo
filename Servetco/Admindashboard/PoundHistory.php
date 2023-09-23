<?php

require_once '../phpconfig/DogsPound.php';

$sql = "SELECT * FROM dogs_pound";
$all_dogs_pound = $con->query($sql);


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Dogs in pound</title>

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

      <section class="container tables">

        <h1>Dogs in pound History</h1>
        <table class="table" id="table">
          <thead>
            <tr class="head">
              <th>ID</th>
              <th>Name</th>
              <th>Date in</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Rescued At</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            <?php
            while ($row = $all_dogs_pound->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $row["DPoundID"] ?></td>
                <td><?php echo $row["DogName"] ?></td>
                <td><?php echo $row["DateIn"] ?></td>
                <td><?php echo $row["Age"] ?></td>
                <td><?php echo $row["Gender"] ?></td>
                <td><?php echo $row["RescuedAt"] ?></td>
                <td><?php echo $row["status"] ?></td>

            <?php
            }
            ?>

          </tbody>
        </table>
      </section>
    </div>
    <?php include 'design/footer.php'; ?>

    <script>
		$(document).ready(function() {
			new DataTable('#table');
		});
	</script>
</body>

</html>