<?php
require '../phpconfig/events.php';

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
            <h1>Announcement</h1>
          </div>
        <!-- Body design -->
        

        <span >
          <div class="Upload" >
            <form class="img_prv" enctype="multipart/form-data" method="POST"  autocomplete="off">     
              <div class="Informations">
            
              <div class="DogInput">
              <div class="DInput">
                <label for="Name">Title:</label>
                <input type="text" name="EventName" placeholder="Enter title:"  required>
              </div>
              <div class="DInput" style="margin-top: 22px; margin-left:25px ;">
                <label for="Date">Date:</label>
                <input type="date" name="Dates" placeholder="Date"  required>
              </div>   
              </div>
              <label for="Name" style="margin: 10px;">Additional details:</label>
              <div class="Doginput2">
              <div class="DInput">
                  <textarea rows="4" cols="40" name="Details" placeholder="Additional details"></textarea>
              </div>

                <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                  <div style="margin-left: 10%;" class="image-preview">
                    <img src="../image/upload.png" width="50px" alt="Upload Dog Picture" id="image-preview">
                    <a href="#" id="choose-file-btn">Choose Images</a>
                  </div>
              </div>
              <div class="button" style="max-width: 33%;" >
                <input style="color: white;" type="submit" name="submit" value="Post">
               </div> 
              </div>

            </form>
          </div>
        </span>
        <!-- Upload dog for adoption end -->
        
        <div class="row border">
                      <?php
            while ($row = $all_events->fetch_assoc()) {
            ?>      
                <div class="col-lg-6 border border-success" style="margin: 2px;">
                    <div class="blog-item ">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                            <img src="EventsImg/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="bi bi-calendar-date me-2"></i><?php echo $row["Dates"] ?></small>
                                    </div>                 
                                    <h5 class="text-uppercase mb-3"><?php echo $row["EventName"] ?></h5>
                                    <p class="fw-lighter lh-lg"><?php echo $row["Details"] ?></p>
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
  </nav>
</div>


<?php include 'design/footer.php'; ?>
    <script src="Image.js"></script>
</body>
</html>