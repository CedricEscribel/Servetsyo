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

  <?php include 'design/header.php'; ?>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <?php include 'design/sidebar.php'; ?>



    <!-- Main body design -->
    <section class="tables container">
      <div class="">
        <h1>User List</h1>


        <button>Add account</button>
      </div>
      <table class="table" id="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th> Date Created</th>
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