<?php 

require_once '../phpconfig/rescue.php';

?>

<head>
    <meta charset="utf-8">
    <title>Rescue </title>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="../css/Schedule.css">
    <!-- Navbar End -->

<!-- Schedule form start -->
     <div class="Schedule_form">
          <h1>Animal Rescue</h1>

        <form method="post" action="../phpconfig/rescue.php">
          <div class="form">
          <label for="name">Name:</label>
          <input type="text" id="name" name="Name" placeholder="Your name">
  
          <label for="Number">Contact Number</label>
          <input type="text" id="number" name="ContactNum" placeholder="Contact Number">
            
          <label for="Animal">Select what kind of animals</label>
            <div class="AnimalType form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Dog
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Cat" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                Cat
            </label>
            </div>

          <label for="Situation">Situation:</label>
          <textarea id="Situation" name="Situation" placeholder="Explain the situation"></textarea>

			  	<input type="submit" name="save" value="Submit">
          </div>
<!-- TODO: google maps to be added -->

        </form> 
      </div>
            </div>
    <!-- Schedule form end -->

    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>
