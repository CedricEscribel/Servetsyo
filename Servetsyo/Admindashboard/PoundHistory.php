<?php

require_once '../phpconfig/Dogs.php';

session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);


  $sql = "SELECT * FROM dogs_info";
  $all_dogs_info = $con->query($sql);


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dogs in pound</title>

    <?php include 'design/datatablelink.php'; ?>

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
            while ($row = $all_dogs_info->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $row["dog_id"] ?></td>
                <td><?php echo $row["description"] ?></td>
                <td><?php echo $row["date"] ?></td>
                <td><?php echo $row["age"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["rescue_loc"] ?></td>
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

  <?php } else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "login.php";</script>';
} ?>