<?php
require '../phpconfig/adoptionRequest.php';

session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);


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


    <?php include 'design/header.php'; ?>

    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php include 'design/sidebar.php'; ?>


      <section class="tables container">
        <div class="  d-flex flex-row align-items-center justify-content-between">
          <h1>Adoption Request History</h1>
          <div class="card-tools" style="float: right;">
            <a href="Export/AdoptExport.php" target="_blank" class="btn btn-sm btn-primary" style="background-color: #4caf50; border: none;">Generate PDF</a>
          </div>
        </div>
        <table class="table" id="table">
          <thead>
            <tr class="head">
              <th>Full Name</th>
              <th>Contact Number</th>
              <th>Address</th>
              <th>Dog Id</th>
              <th>Interview</th>
              <th>Date Requested</th>
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
                <td><?php echo $row["DateReq"] ?></td>
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

  <?php } else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "login.php";</script>';
} ?>