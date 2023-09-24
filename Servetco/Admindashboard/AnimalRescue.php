<?php
require '../phpconfig/rescue.php';


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Animal Rescue</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="Admin.css" rel="stylesheet">


</head>

<body>

  <?php include 'design/header.php'; ?>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <?php include 'design/sidebar.php'; ?>


    <section class="tables container">
      <h1>Animal Rescue History</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Kind of Animal</th>
            <th>Situation</th>
            <th>Location</th>
            <th>Date Requested</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $rows = mysqli_query($con, "SELECT * FROM rescue where status='pending' ")
          ?>
          <?php foreach ($rows as $row) : ?>
            <tr>
              <td><?php echo $row["Name"] ?></td>
              <td><?php echo $row["ContactNum"] ?></td>
              <td><?php echo $row["animal"] ?></td>
              <td><?php echo $row["Details"] ?></td>
              <td><?php echo $row["Coordinates"] ?></td>
              <td><?php echo $row["ReqDate"] ?></td>
              <td><label for="approval"></label>
                <button class="btn btn-sm <?php echo $row['status'] == 'Approve' ? 'btn-success' : 'btn-danger' ?>" value="<?php echo $row["Rescue_id"] ?>" id="btnStatus">
                  <?php echo $row["status"] ?>
                </button>
            </tr>

            <form action="../phpconfig/rescue.php" method="post" hidden>

              <input type="hidden" name="id" id="id" value="<?php echo $row['Rescue_id'] ?>">
              <input type="hidden" name="hiddenStatus" id="<?php echo $row["Rescue_id"] ?>hiddenStatus" value="">
              <button type="submit" id="<?php echo $row["Rescue_id"] ?>" name="btnHideSubmit" hidden></button>
            </form>


          <?php endforeach; ?>
        </tbody>
      </table>
    </section>

  </div>
  </nav>
  </div>

  <?php include 'design/footer.php'; ?>

</body>

</html>