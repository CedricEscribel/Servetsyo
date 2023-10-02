<?php

require_once '../phpconfig/DogsPound.php';

$sql = "SELECT * FROM dogs_pound where status='pending'";
$all_dogs_pound = $con->query($sql);


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

      <h1>Dogs in pound</h1>
      <span>
        <div class="Upload">
          <form class="img_prv" method="POST" action="../phpconfig/DogsPound.php" autocomplete="off">
            <div class="DogsPoundInput">
              

            <div class="DogInput">
                <div class="DInput">
                  <label for="Name">Name:</label>
                  <input type="text" name="Name" placeholder="Name" required>
                </div>
                <div class="DInput">
                  <label for="Name">Age:</label>
                  <input type="text" name="Age" placeholder="Age" required>
                </div>
                <div class="DInput">
                  <label for="Name">Gender:</label>
                  <input type="text" name="Gender" placeholder="Gender" required>
                </div>
              </div>
              <label for="Name" style="margin: 10px;">Additional details:</label>
              <div class="Doginput2">
                <div class="DInput">
                  <textarea rows="4" cols="40" name="DogInfo" placeholder="Additional details" required></textarea>
                </div>

                <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                <div style="margin-left: 5%;" class="image-preview">
                  <img src="../image/upload.png" style="border: black 1px dotted;" alt="Upload Dog Picture" id="image-preview">
                  <a href="#" id="choose-file-btn">Choose Images</a>
                </div>
              </div>
              <div class="button" style="max-width: 34%;">
                <input style="color: white;" type="submit" name="submit" value="Post">
              </div>

              <div class="DogInput">
                <div class="Inp">
                  <div class="DInput">
                    <label for="Name">Name/Description:</label>
                    <input type="text" name="DogName" placeholder="Name/Description" required>
                  </div>
                  <div class="DInput">
                    <label style="margin-left:-50px;" for="date">Date In:</label> <br>
                    <input class="DateIn" type="date" name="DateIn" required>
                  </div>

                  <div class="DInput">
                    <label for="Name">Age:</label>
                    <input type="text" width="10px" name="Age" placeholder="Age" required>
                  </div>
                  <div class="button">
                    <input style="color: white;" type="submit" name="submit" value="Add">
                  </div>
                </div>
                <div class="Inp">

                  <div class="DInput" style="margin-top: 10px;">
                    <label for="Name">Gender:</label>
                    <br>
                    <select class="dropbtn" name="Gender" required>
                      <option value="">Please Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>

 
                  </div>
                  <div class="DInput">
                    <label for="RescuedAt">Rescued at:</label>
                    <input type="text" name="RescuedAt" placeholder="Location" required>
                  </div>

                </div>

              </div>


            </div>
          </form>
        </div>
      </span>
      <section class="container tables">

        <table class="table">
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
                <td><label for="approval"></label>
                  <button class="btn btn-sm <?php echo $row['status'] == 'Approve' ? 'btn-success' : 'btn-danger' ?>" value="<?php echo $row["DPoundID"] ?>" id="btnStatus">
                    <?php echo $row["status"] ?>
                  </button>
              </tr>

              <form action="../phpconfig/DogsPound.php" method="post" hidden>

                <input type="hidden" name="id" id="id" value="<?php echo $row['DPoundID'] ?>">
                <input type="hidden" name="hiddenStatus" id="<?php echo $row["DPoundID"] ?>hiddenStatus" value="">
                <button type="submit" id="<?php echo $row["DPoundID"] ?>" name="btnHideSubmit" hidden></button>
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

</html>