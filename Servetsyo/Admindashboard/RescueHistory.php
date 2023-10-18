<?php
require '../phpconfig/rescue.php';

session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);


?>


  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Animal Rescue</title>


    <?php include 'design/datatablelink.php'; ?>

    <?php include 'design/header.php'; ?>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php include 'design/sidebar.php'; ?>


      <section class="tables container">
        <h1>Animal Rescue History</h1>
        <table class="table" id="table">
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
                <td><?php echo $row["animal"] ?></td>
                <td><?php echo $row["Details"] ?></td>
                <td><?php echo $row["Coordinates"] ?></td>
                <td><?php echo $row["status"] ?></td>

              </tr>


            <?php endforeach; ?>
          </tbody>
        </table>
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

  <?php } else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "login.php";</script>';
} ?>