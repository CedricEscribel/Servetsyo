<?php
require_once '../phpconfig/config.php';

$sql = "SELECT * FROM dogs_info where status='adoption'";
$all_adoption = $con->query($sql);

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
        while ($row = $all_adoption->fetch_assoc()) {
        ?>
          <div class="card adoption_card" style="width: 20rem;">
            <img src="DogImage/<?php echo $row["image"]; ?>" title="<?php echo $row['image']; ?>">
            <div class="card-body adoption-details">
              <h2><?php echo $row["description"] ?></h2>
              <p><?php echo $row["dog_info"] ?></p>
            </div>
            <ul class="adoption-details" style="  margin-left: -15%;">
              <p><?php echo $row["gender"] ?></p>
              <p><?php echo $row["age"] ?> Months old</p>
            </ul>

            <div class="card-body card-button">
              <button class="btn btn-success " value="<?php echo $row["dog_id"] ?>" id="Adopted">Adopted</button> 
              <button value="<?php echo $row["dog_id"] ?>"  id="Euthanized" class="btn btn-primary">Euthanized</button>
              <button value="<?php echo $row["dog_id"] ?>"  id="Edit" class="btn btn-warning">Edit</button>
            </div>

            <form action="jquery/adoption_update.php" method="post" hidden>
              <input type="hidden" name="id" id="id" value="<?php echo $row['dog_id'] ?>">
              <input type="hidden" name="UpdateStatus" id="<?php echo $row["dog_id"] ?>UpdateStatus" value="">
              <button type="submit" id="<?php echo $row["dog_id"] ?>" name="Update" hidden></button>
            </form>


          </div>
        <?php } ?>
      </div>

    </div>



    <!-- footer -->
    <?php include 'design/footer.php'; ?>
    </body>

</html>