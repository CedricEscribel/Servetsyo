<?php
require '../phpconfig/adoptionRequest.php';

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
      <h1>Adoption Request</h1>
      <table class="table">
        <thead>
          <tr class="head">
            <th>Full Name</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Dog Name</th>
            <th>Interview</th>
            <th>Date</th>
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
              <td>dogName </td>
              <td><?php echo $row["Interview"] ?></td>
              <td><?php echo $row["Date"] ?></td>
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

</html>