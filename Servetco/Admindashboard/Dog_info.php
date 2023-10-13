<?php

require_once '../phpconfig/Dogs.php';

$sql = "SELECT * FROM dogs_info  where status='pending' ";
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

      <h1>Dogs in pound</h1>
      <span>

        <div class="d-flex align-items-center flex-column mb-4 border border-success p-2 mb-2 border-opacity-50">
          <form class="Upload-dogs" method="POST"  enctype="multipart/form-data"  action="../phpconfig/Dogs.php" autocomplete="off">
            <div class="row mb-4 flex-column">
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="DogName">Name/Description:</label>
                  <input type="text" name="description" id="DogName" class="form-control" required />
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="Age">Age:</label>
                  <input type="text" id="Age" name="age" class="form-control" required placeholder="Month" />
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="Gender">Gender:</label>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="gender" required>
                      <option value="">Please Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="date">Date In:</label> <br>
                    <input class="date" type="date" name="date" required>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="RescuedAt">Rescued at:</label>
                  <input type="text" name="rescue_loc" placeholder="Location" class="form-control" required>
                </div>
              </div>
            </div>

            <div class="row mb-4 " >
              <div class="col" >
                <div class="form-outline">
                  <label class="form-label" name="DogInfo" for="DogInfo">Additional information:</label>
                  <textarea class="form-control" name="dog_info" rows="3" required></textarea>
                </div>
              </div>
              <div class="col" >
                <div class="form-outline">
                  <div class="image-preview">
                    <img src="../image/upload.png" alt="Upload Dog Picture" id="image-preview">
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

        <table class="table"  id="table">
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
                  <button class="btn btn-sm <?php echo $row['status'] == 'adoption' ? 'btn-success' : 'btn-danger' ?>" value="<?php echo $row["dog_id"] ?>" id="dog_status">
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
    <script src="Image.js"></script>
    </body>

</html>