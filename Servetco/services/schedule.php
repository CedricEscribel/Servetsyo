<?php 

require_once '../phpconfig/Schedule.php';

$sql = "SELECT * FROM schedule";
$all_schedule = $con->query($sql);

session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

include "../log/session.php";
$user = getUserById($_SESSION['user_id'], $conn);

?>

<head>
    <meta charset="utf-8">
    <title>Schedule </title>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="../css/Schedule.css">
    <link rel="stylesheet" href="../scss/dropdown.css">
    <!-- Navbar End -->


<!-- Schedule form start -->

    <div class="Schedule_form">
          <h1>Schedule Request</h1>

        <form method="post" action="../phpconfig/Schedule.php">
          <div class="form">
          

          <label for="name">Name:</label>
          <input type="text" id="name" disabled placeholder=" <?=$user['Fullname']?>">
  
          <select class="Hide" name="user_id" style="display: none;">
                <option value="<?=$user['user_id']?>"></option>
          </select>  
          
          <select class="Hide" name="FullN" style="display: none;">
                <option value="<?=$user['Fullname']?>"></option>
          </select>  

          <select class="Hide" name="PhoneNum" style="display: none;">
                <option value="<?=$user['PhoneNum']?>"></option>
          </select>  

          <label for="Number">Contact Number:</label>
          <input type="text" id="number"  disabled placeholder=" <?=$user['PhoneNum']?>">
           
            <label for="Sched">Schedule For:</label>
            <select class="dropbtn" name="Sched">
                <option value="">Choose Animal</option>
                <option value="Cat">Cat</option>
                <option value="Dog">Dog</option>
            </select>  
  
          <label for="PName">Pet's name:</label>
          <input type="text" name="PetName" placeholder="Pet's name" require>

          <label for="Breed">Breed:</label>
          <input type="text" id="Breed" name="Breed" placeholder="Breed" require>
  
          <label for="Color">Color:</label>
          <input type="text" id="Color" name="Color" placeholder="Color" require>
  
          <label for="Age">Age:</label>
          <input type="text" id="Age" name="Age" placeholder="Age" require>
  
          <label for="Gender">Gender:</label>
          <input type="text" id="Gender" name="Gender" placeholder="Gender" require>


          <label for="message">Note:</label>
          <textarea id="message" name="Message" placeholder="Additional details"></textarea>

          <input type="submit"   name="save" value="Submit">
          </div>
        </form>
      </div> 
    <!-- Schedule form end -->

    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>

<?php }else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "../login.php";</script>';
} ?>