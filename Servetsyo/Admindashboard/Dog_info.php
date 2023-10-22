<?php

require_once '../phpconfig/Dogs.php';

session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);


  $sql = "SELECT * FROM dogs_info  where status='Pound' ";
  $all_dogs_info = $con->query($sql);


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dogs in pound</title>


    <?php include 'design/header.php'; ?>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php include 'design/sidebar.php'; ?>
      <div class="container">

        <div class="position-relative">
          <h1>Dogs in pound</h1>
          <button class="position-absolute top-0 end-0 button" style="width: max-content; border: none; padding: 4px; " onclick="window.location.href='add_dogs.php';">
            <input style="color: white;" type="submit" value="Add dogs">
          </button>
        </div>

        <section class="container tables">

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
                  <td><label for="status"></label>
                    <button class="btn btn-sm <?php echo $row['status'] == 'adoption' ? 'btn-success' : 'btn-warning' ?>" value="<?php echo $row["dog_id"] ?>" id="dog_status">
                      <?php echo $row["status"] ?>
                    </button>
                </tr>

                <form action="../phpconfig/Dogs.php" method="post" hidden>
                  <input type="hidden" name="id" id="id" value="<?php echo $row['dog_id'] ?>">
                  <input type="hidden" name="hiddenStatus" id="<?php echo $row["dog_id"] ?>hiddenStatus" value="">
                  <button type="submit" id="<?php echo $row["dog_id"] ?>" name="btnHideSubmit" hidden></button>
                </form>

              <?php
              }
              ?>

            </tbody>
          </table>
        </section>
      </div>
      <?php include 'design/footer.php'; ?>
      </body>

    <?php } else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "login.php";</script>';
  } ?>