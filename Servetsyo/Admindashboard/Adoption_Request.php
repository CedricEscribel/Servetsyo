<?php
require '../phpconfig/adoptionRequest.php';

session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);


  $sql = "SELECT * FROM adoptionrequest where status='pending'";
  $all_adoptionrequest = $con->query($sql);


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Adoption Request</title>


    <?php include 'design/header.php'; ?>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php include 'design/sidebar.php'; ?>

      <section class="tables container">
        <h1>Adoption Request</h1>
        <table class="table">
          <thead>
            <tr class="head">
              <th>Full Name</th>
              <th>Contact Number</th>
              <th>Address</th>
              <th>Dog Id</th>
              <th>Interview</th>
              <th>Preferred Date</th>
              <th>Date Requested</th>
              <th>Set Date</th>
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
                <td><?php echo $row["DateReq"] ?></td>
                <td>
                  <form action="../phpconfig/adoptionRequest.php" method="POST">
                    <input type="date" id="dt" name="SetDate" value="<?php echo $row['SetDate'] ?>">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['AdoptReq_id'] ?>">
                    <button name="setdate"> <i class="bi bi-calendar2-check"></i></button>
                  </form>
                </td>
                <td><label for="approval"></label>
                  <button class="btn btn-sm <?php echo $row['status'] == 'Approve' ? 'btn-success' : 'btn-danger' ?>" value="<?php echo $row["AdoptReq_id"] ?>" id="btnStatus">
                    <?php echo $row["status"] ?>
                  </button>
              </tr>

              <form action="../phpconfig/adoptionRequest.php" method="post" hidden>
                <input type="hidden" name="id" id="id" value="<?php echo $row['AdoptReq_id'] ?>">
                <input type="hidden" name="hiddenStatus" id="<?php echo $row["AdoptReq_id"] ?>hiddenStatus" value="">
                <button type="submit" id="<?php echo $row["AdoptReq_id"] ?>" name="btnHideSubmit" hidden></button>
              </form>

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
    </body>

  <?php } else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "login.php";</script>';
} ?>

  <script>
    document.getElementById('dt').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
  </script>