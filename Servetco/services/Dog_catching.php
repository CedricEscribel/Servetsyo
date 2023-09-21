<?php 

require_once '../phpconfig/Catching.php';

$sql = "SELECT * FROM catch";
$all_schedule = $con->query($sql);


session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

include "../log/session.php";
$user = getUserById($_SESSION['user_id'], $conn);

?>

<head>
    <meta charset="utf-8">
    <title>Dog Catching </title>

    <?php include "header.php"; ?>
    <link rel="stylesheet" href="../css/Schedule.css">
    <link rel="stylesheet" href="../scss/dropdown.css">
    <!-- Navbar End -->

   
</style>
<!-- Schedule form start -->
    <div class="Schedule_form">
          <h1>Dog Catching Request</h1>

        <form method="post" action="../phpconfig/Catching.php">
          <div class="form">
          <label for="Barangay">Barangay: </label>
            <label for="Barangay"></label>
            <select class="dropbtn" name="BarangayID" required>
                <option class="dropbtn"  value="">Choose Barangay</option>
                <option value="Bagong Nayon">Bagong Nayon</option>
                <option value="Barangca">Barangca</option>
                <option value="Calantipay">Calantipay</option>
                <option value="Catulinan">Catulinan</option>
                <option value="Concepcion">Concepcion</option>
                <option value="Hinukay">Hinukay</option>
                <option value="Makinabang">Makinabang</option>
                <option value="Matangtubig">Matangtubig</option>
                <option value="Pagala">Pagala</option>
                <option value="Paitan">Paitan</option>
                <option value="Piel">Piel</option>
                <option value="Pinagbarilan">Pinagbarilan</option>
                <option value="Poblacion">Poblacion</option>
                <option value="Sabang">Sabang</option>
                <option value="San Jose">San Jose</option>
                <option value="San Roque">San Roque</option>
                <option value="Santa Barbara">Santa Barbara</option>
                <option value="Santo Cristo">Santo Cristo</option>
                <option value="Santo Niño">Santo Niño</option>
                <option value="Subic">Subic</option>
                <option value="Sulivan">Sulivan</option>
                <option value="Tangos">Tangos</option>
                <option value="Tarcan">Tarcan</option>
                <option value="Tiaong">Tiaong</option>
                <option value="Tibag">Tibag</option>
                <option value="Tilapayong">Tilapayong</option>
                <option value="Virgen delas Flores">Virgen delas Flores</option>
            </select>    
  
          <select class="Hide" name="ContNum" style="display: none;">
                <option value="<?=$user['PhoneNum']?>"></option>
          </select>  
          <label style="margin-top: 10px;" for="Number">Contact Number:</label>
          <input type="text" id="number" name="ContNum" disabled placeholder=" <?=$user['PhoneNum']?>">

          <label for="Number">Number of Dogs:</label>
          <input type="text" id="number" name="DogCount" placeholder="Number of Dogs" required>

          <label for="Notes">Notes:</label>
          <textarea id="Notes" name="Notes" placeholder=""  required></textarea>

<!--TODO: copy button from adoption -->

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
  <!-- Template Javascript --> 



</script>
</body>

<?php }else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "../login.php";</script>';
} ?>