<?php
require '../phpconfig/dogs.php';


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Adoption</title>


  <?php include 'design/header.php'; ?>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <?php include 'design/sidebar.php'; ?>


    <div class="container">
      <div class="header">
        <h1 style="text-transform:uppercase">Dogs for Adoption </h1>
      </div>
      <!-- Body design -->

      <div class="Dogs">
        <?php
        $i = 1;
        $rows = mysqli_query($con, "SELECT * FROM dogs ORDER BY Dog_id DESC")
        ?>
        <?php foreach ($rows as $row) : ?>
          <div class="card adoption_card" style="width: 20rem;">
          <img src="img/<?php echo $row["image"]; ?>" title="<?php echo $row['image']; ?>">
            <div class="card-body adoption-details">
            <h2><?php echo $row["Name"] ?></h2>
              <p><?php echo $row["DogInfo"] ?></p>
            </div>
            <ul class="adoption-details" style="  margin-left: -15%;">
            <p><?php echo $row["Gender"] ?></p>
            <p><?php echo $row["Age"] ?> Months old</p>
            </ul>
            <div class="card-body card-button">
              <button type="button" id="Adopted" class="btn btn-success">Adopted</button>
              <button type="button" id="Euthanized" class="btn btn-primary">Euthanized</button>
              <button type="button" id="Edit" class="btn btn-warning">Edit</button>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
      
    </div>



    <!-- footer -->
    <?php include 'design/footer.php'; ?>


    <script src="Image.js"></script>

</body>

</html>