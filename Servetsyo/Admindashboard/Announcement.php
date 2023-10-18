<?php
require '../phpconfig/events.php';
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
        <div class="header">
          <h1>Announcement</h1>
        </div>
        <!-- Body design -->

        <div class="d-flex align-items-center flex-column mb-4 border border-success p-2 mb-2 border-opacity-50">
          <form enctype="multipart/form-data" method="POST" autocomplete="off">

            <div class="container">

              <div class="col">
                <div class="row my-2" style="max-width: 85%;">
                  <label for="Name">Title:</label>
                  <input type="text" name="EventName" placeholder="Enter title:" required>
                </div>
                <div class="row">
                  <div class="col-5 my-2">
                    <label for="Date">Date:</label>
                    <input type="date" id="dt" name="Dates" placeholder="Date" required>
                  </div>
                  <div class="col-5 my-2">
                    <label for="Expired date">Expired date:</label>
                    <input type="date" id="dt2" name="Expired_date" required>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-left: 25%;">
                <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                <div class="image-preview">
                  <img src="../image/upload.png" alt="Upload Dog Picture" id="image-preview">
                  <a href="#" id="choose-file-btn">Choose Images</a>
                </div>
              </div>

            </div>

            <div class="col">
              <label for="Name">Event details:</label>
              <div>
                <div>
                  <textarea rows="4" cols="50" name="Details" placeholder="Event details"></textarea>
                </div>
              </div>
            </div>


            <div class="button">
              <input style="color: white;" type="submit" name="submit" value="Post">
            </div>
          </form>
        </div>


        <div class="container">
          <div class="row border">
            <?php
            while ($row = $all_events->fetch_assoc()) {
            ?>
              <div class="col-lg-6 border border-success" style="margin: 2px;">
                <div class="blog-item ">
                  <div class="row g-0 bg-light overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                      <img src="EventsImg/<?php echo $row["image"]; ?>" width=200 title="<?php echo $row['image']; ?>">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                      <div class="p-4">
                        <div class="d-flex mb-3">
                          <small><i class="bi bi-calendar-date me-2"></i><?php echo $row["Dates"] ?> / <small style="color: red;"><?php echo $row["Expired_date"] ?></small></small>
                        </div>
                        <h5 class="text-uppercase mb-3"><?php echo $row["EventName"] ?></h5>
                        <p class="fw-lighter lh-lg"><?php echo $row["Details"] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        <?php
            }
        ?>
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
      document.getElementById('dt2').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
    </script>