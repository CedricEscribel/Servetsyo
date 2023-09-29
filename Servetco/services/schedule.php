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
    <!-- Navbar End -->


<!-- Schedule form start -->

    <div class="Schedule_form">
          <h1>Schedule Request</h1>

        <form method="post" action="../phpconfig/Schedule.php" autocomplete="off">
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
            <select class="dropbtn" name="Sched" required>
                <option value="">Please Select</option>
                <option value="Anti-rabies Vaccination">Anti-rabies Vaccination</option>
                <option value="Castration">Castration</option>
            </select>  
  
          <label for="PName">Pet's name:</label>
          <input type="text" name="PetName" placeholder="Pet's name" required>

          <label for="Breed">Breed:</label>
          <input type="text" id="Breed" name="Breed" placeholder="Breed" required>
  
          <label for="Color">Color:</label>
          <input type="text" id="Color" name="Color" placeholder="Color" required>
  
          <label for="Age">Age:</label>
          <input type="text" id="Age" name="Age" placeholder="Age" required>
  
          <label for="Gender">Gender:</label>
          <select class="dropbtn" name="Gender" required>
                <option value="">Please Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>  


          <label for="message">Note:</label>
          <textarea id="message" name="Message" placeholder="Additional details" required></textarea>

			  	<input type="submit" name="save" value="Submit">
          </div>
        </form>
      </div> 
    <!-- Schedule form end -->

    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->


</body>

<?php }else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "../login.php";</script>';
} ?>