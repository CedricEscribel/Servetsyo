<?php
require '../phpconfig/rescue.php';


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

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
      <div class="Appointment">
        <h1>Animal Rescue</h1>
        <table class="Reports">
        <thead>
          <tr>
          <th>Name</th>
          <th>Contact Number</th>
          <th>Kind of Animal</th>
          <th>Situation</th>
          <th>Location</th>
          <th>Status</th>
          </tr>
        </thead>
        <tbody>
      <?php
      $i = 1;
      $rows = mysqli_query($con, "SELECT * FROM rescue ORDER BY Rescue_id DESC")
      ?>
      <?php foreach ($rows as $row) : ?>
          <tr>
          <td><?php echo $row["Name"] ?></td>
          <td><?php echo $row["ContactNum"] ?></td>
          <td>Animal</td>
          <td><?php echo $row["Details"] ?></td>
          <td>Location</td>
          <td><label for="approval"></label>
            <select id="approval">
              <option value="Pending">Pending</option>
              <option value="Approve">Approve</option>
              <option value="Decline">Decline</option>
            </select>
            </td>
          </tr>
      <?php endforeach; ?>
        </tbody>
        </table>
      </div>
    </section>
    
    </div>
  </nav>
</div>

<?php include 'design/footer.php'; ?>
</body>
</html>