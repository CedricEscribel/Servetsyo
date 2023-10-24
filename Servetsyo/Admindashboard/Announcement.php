<?php
require '../phpconfig/config.php';
session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);

  $sql = "SELECT * FROM events";
  $all_events = $con->query($sql);

?>


  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Announcement</title>


    <?php include 'design/header.php'; ?>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php include 'design/sidebar.php'; ?>

      <div class="container">
        <div class="position-relative">
          <h1>Announcement</h1>
          <button class="position-absolute top-0 end-0 button" style="width: max-content; border: none; padding: 4px; " onclick="window.location.href='Announcements.php';">
            <input style="color: white;" type="submit" value="Add Announcement">
          </button>
        </div>
        <!-- Body design -->
        <div class="container mt-5 mb-5">
          <div class="d-flex justify-content-center row">
            <div class="col-md-10">

              <?php
              while ($row = $all_events->fetch_assoc()) {
              ?>
                <form action="../phpconfig/events.php" method="POST">
                  <div class="row p-1 mb-1 bg-white border rounded">
                    <div class="col-md-3 mt-1"> <img src="EventsImg/<?php echo $row["image"]; ?>" width=200 title="<?php echo $row['image']; ?>"></div>
                    <div class="col-md-6 mt-2">
                      <h5 class="ms-0"><input type="text" name="EventName" value="<?php echo $row['EventName'] ?>"></h5>
                      <div class="d-flex flex-row mb-3">
                        <small> <i class="bi bi-calendar-date me-2"></i><input type="date" id="dt" name="date" value="<?php echo $row['Dates'] ?>"> / <input type="date" name="Expdate" id="expd" style="color: red;" value="<?php echo $row['Expired_date'] ?>"></small>
                      </div>
                      <p class="text-justify "> <textarea class="form-control" name="Details" rows="3"><?php echo $row['Details'] ?></textarea></p>
                    </div>
                    <div class="align-items-center align-content-center  col-md-3 border-left mt-1">
                      <div class="d-flex flex-column mt-4">
                        <input type="hidden" name="id" id="id" value="<?php echo $row['EventId'] ?>">
                        <button class="btn btn-danger btn-sm" style="width: 100%;" value="<?= $row['EventId']; ?>" name="delete" type="submit">Delete</button>
                        <button class="btn btn-outline-success btn-sm mt-2" style="width: 100%;" name="Edit" type="submit">Edit</button>
                </form>
            </div>
          </div>
        </div>
      <?php
              }
      ?>
      </div>
    </div>
    </div>

    <?php include 'design/footer.php'; ?>
    <script src="Image.js"></script>
    </body>

  <?php } else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "login.php";</script>';
} ?>

  <script>
    document.getElementById('dt').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
    document.getElementById('expd').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
  </script>