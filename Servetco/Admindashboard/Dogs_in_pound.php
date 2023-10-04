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

        <div class="d-flex align-items-center flex-column mb-4 border border-success p-2 mb-2 border-opacity-50">
          <form class="Upload-dogs" method="POST" action="../phpconfig/DogsPound.php" autocomplete="off">
              <div class="row mb-4 flex-column">
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="DogName">Name/Description:</label>
                    <input type="text" name="DogName" id="DogName" class="form-control" required />
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="Age">Age:</label>
                    <input type="text" id="Age" name="Age" class="form-control" required placeholder="Month" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="Gender">Gender:</label>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="Gender" required>
                      <option value="">Please Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="RescuedAt">Rescued at:</label>
                    <input type="text" name="RescuedAt" placeholder="Location" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="date">Date In:</label> <br>
                    <input class="DateIn" type="date" name="DateIn" required>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" name="DogInfo" for="DogInfo">Additional information:</label>
                    <textarea class="form-control" id="DogInfo" rows="3" required></textarea>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <div class="image-preview">
                      <img src="../image/upload.png" style="border: black 1px dotted;" alt="Upload Dog Picture" id="image-preview">
                      <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                      <a href="#" id="choose-file-btn">Choose Images</a>
                    </div>
                  </div>
                </div>
              </div>
            <div class="button">
              <input style="color: white;" type="submit" name="submit" value="Add">
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
    <script src="Image.js"></script>

    </body>

</html>