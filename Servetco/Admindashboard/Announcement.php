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
        <span class="border card mb-3">
          <div class="Upload" >
            <form class="img_prv" enctype="multipart/form-data" method="POST"  autocomplete="off">     
              <div>
                <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                  <div class="image-preview">
                    <img src="../img/adoption.jpg" alt="Upload Dog Picture" id="image-preview">
                    <a href="#" id="choose-file-btn">Choose Images</a>
                  </div>
              </div>

              <div class="Informations">
              <div class="Details">
                <input type="text" name="Name" placeholder="Name"  required>
              </div>
              <div class="Details">
                <input type="text" name="Age" placeholder="Age"  required>
              </div>
              <div class="Details">
                <input type="text" name="Gender" placeholder="Gender"  required>
              </div>
              <div class="Details" style="margin-left: 3px;">
                  <textarea rows="3" cols="24" id="message" name="DogInfo" placeholder="Additional details"></textarea>
              </div>
                <input type="submit" name="submit" value="Upload">
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
                                        <small><i class="bi bi-calendar-date me-2"></i>15 May, 2023</small>
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


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>
</html>