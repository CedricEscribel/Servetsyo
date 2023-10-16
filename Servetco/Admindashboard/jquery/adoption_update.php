<?php
require_once '../../phpconfig/config.php';


if (isset($_POST['Update'])) {
    $id = $_POST['id'];
    $status = $_POST['UpdateStatus'];
  
    $sql = "UPDATE dogs_info SET status = '$status' WHERE dog_id  = $id ";
    $Save = mysqli_query($con, $sql);
    if ($status === 'Adopted') {
  
      echo '<script type="text/javascript">
    window.location.href = "../Adoption.php";
    </script>';
    } else {
      echo '<script type="text/javascript">
    window.location.href = "../Adoption.php";
    </script>';
    }
  }
?>




