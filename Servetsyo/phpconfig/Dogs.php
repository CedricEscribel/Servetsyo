<?php
include_once 'config.php';


if (isset($_POST["submit"])) {
  $description = $_POST["description"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $date = $_POST["date"];
  $rescue_loc = $_POST["rescue_loc"];
  $dog_info = $_POST["dog_info"];

  if ($_FILES["image"]["error"] == 4) {
    echo
    "<script> alert('Image does not exist'); 
    document.location.href = '../Admindashboard/Dog_info.php';
    </script>";
  } else {
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtension)) {
      echo
      "
        <script>
          alert('Invalid image extension');
          document.location.href = '../Admindashboard/Dog_info.php';
        </script>
        ";
    } else {

      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;
      move_uploaded_file($tmpName, '../Admindashboard/DogImage/' . $newImageName);
      $query = "INSERT INTO dogs_info VALUES('', '$description', '$age',  '$gender', '$date', '$rescue_loc', '$dog_info', '$newImageName', 'Pound')";
      mysqli_query($con, $query);
      echo
      "
        <script>
          alert('Successfully Added');
          document.location.href = '../Admindashboard/Dog_info.php';
        </script>
        ";
    }
  }
}

if (isset($_POST['btnHideSubmit'])) {
  $id = $_POST['id'];
  $status = $_POST['hiddenStatus'];

  $sql = "UPDATE dogs_info SET status =  '$status' WHERE dog_id  = $id ";
  $Save = mysqli_query($con, $sql);
  if ($status === 'Approve') {

    echo '<script type="text/javascript">
  window.location.href = "../Admindashboard/Dog_info.php";
  </script>';
  } else {
    echo '<script type="text/javascript">
  window.location.href = "../Admindashboard/Dog_info.php";
  </script>';
  }
}



if (isset($_POST['edit'])) {

  echo '<script type="text/javascript">
  window.location.href = "../Admindashboard/editdog.php";
  </script>';
}

if (isset($_POST['cancel'])) {
  echo '<script type="text/javascript">
  window.location.href = "../Admindashboard/Adoption.php";
  </script>';
}

if (isset($_POST['Save'])) {

  $id = $_POST['id'];
  $description = $_POST['description'];
  $dog_info = $_POST['dog_info'];


  $sql = "UPDATE dogs_info SET description = '$description', dog_info = '$dog_info' WHERE dog_id  = $id ";
  $Save = mysqli_query($con, $sql);

  echo
  "
    <script>
      alert('$description saved Successfully');
      document.location.href = '../Admindashboard/Adoption.php';
    </script>
    ";
}
