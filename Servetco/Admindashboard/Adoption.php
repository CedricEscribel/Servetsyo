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

	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="Admin.css" rel="stylesheet">


</head>

<body>

<?php include 'design/header.php'; ?>
<div class="wrapper">
      <!-- Sidebar Holder -->
	<?php include 'design/sidebar.php'; ?>

      <div class="container">
          <div class="header">
            <h1 style="text-transform:uppercase" >Adoption</h1>
          </div>
        <!-- Body design -->
        
        <!-- Upload dog for adoption -->
<!-- TODO: Add pictures -->

        <span>
          <div class="Upload" >
            <form class="img_prv" enctype="multipart/form-data" method="POST"  autocomplete="off">     
              <div class="Informations">
            
              <div class="DogInput">
              <div class="DInput">
                <label for="Name">Name:</label>
                <input type="text" name="Name" placeholder="Name"  required>
              </div>
              <div class="DInput">
                <label for="Name">Age:</label>
                <input type="text" name="Age" placeholder="Age"  required>
              </div>
              <div class="DInput">
                <label for="Name">Gender:</label>
                <input type="text" name="Gender" placeholder="Gender"  required>
              </div>      
              </div>
              <label for="Name" style="margin: 10px;">Additional details:</label>
              <div class="Doginput2">
              <div class="DInput">
                  <textarea rows="4" cols="40" name="DogInfo" placeholder="Additional details"></textarea>
              </div>

                <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                  <div style="margin-left: 5%;" class="image-preview">
                    <img src="../image/upload.png" style="border: black 1px dotted;" alt="Upload Dog Picture" id="image-preview">
                    <a href="#" id="choose-file-btn">Choose Images</a>
                  </div>
              </div>
              <div class="button" style="max-width: 34%;" >
                <input style="color: white;" type="submit" name="submit" value="Post">
               </div> 
              </div>

            </form>
          </div>
        </span>
        <!-- Upload dog for adoption end -->

        <div class="Dogs">
            <?php
            $i = 1;
            $rows = mysqli_query($con, "SELECT * FROM dogs ORDER BY Dog_id DESC")
            ?>
          <div class="DogDetails">
            <?php foreach ($rows as $row) : ?>
               <div class="Dog-det" >
                        <div class="ImageDog" id="dog">
                          <img src="img/<?php echo $row["image"]; ?>" title="<?php echo $row['image']; ?>">
                        </div>

                        <div class="Details">
                          <h2><?php echo $row["Name"] ?></h2>
                          <p><?php echo $row["Gender"] ?></p>                   
                          <p><?php echo $row["Age"] ?> Months old</p>                                    
                          <p><?php echo $row["DogInfo"] ?></p>                   
                        </div>
                </div>

              <?php endforeach; ?> 
      </div>
              </div>
</div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

    <script src="Image.js"></script>

</body>
</html>