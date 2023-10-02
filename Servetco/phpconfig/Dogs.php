<?php



include_once 'config.php';



if (isset($_POST["submit"])) {
  $DogInfo = $_POST["DogInfo"];
  $Name = $_POST["Name"];
  $Age = $_POST["Age"];
  $Gender = $_POST["Gender"];

  if ($_FILES["image"]["error"] == 4) {
    echo
    "<script> alert('Image does not exist'); </script>";
  } else {
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png', 'gif'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtension)) {
      echo
      "
        <script>
          alert('Invalid image extension');
        </script>
        ";
    } else {

      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;
      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO dogs VALUES('', '$DogInfo', '$Name', '$Age', '$Gender', '$newImageName')";
      mysqli_query($con, $query);
      echo
      "
        <script>
          alert('Successfully Added');
          document.location.href = 'Adoption.php';
        </script>
        ";
    }
  }
}




function display_data()
{
  global $con;
  $query = "select * from dogs";
  $result = mysqli_query($con, $query);
  return $result;
}


?>



<!-- Upload dog for adoption -->
<!-- TODO: Add pictures -->

<!-- <span>
        <div class="Upload">
          <form class="img_prv" enctype="multipart/form-data" method="POST" autocomplete="off">
            <div class="Informations">

              <div class="DogInput">
                <div class="DInput">
                  <label for="Name">Name:</label>
                  <input type="text" name="Name" placeholder="Name" required>
                </div>
                <div class="DInput">
                  <label for="Name">Age:</label>
                  <input type="text" name="Age" placeholder="Age" required>
                </div>
                <div class="DInput">
                  <label for="Name">Gender:</label>
                  <input type="text" name="Gender" placeholder="Gender" required>
                </div>
              </div>
              <label for="Name" style="margin: 10px;">Additional details:</label>
              <div class="Doginput2">
                <div class="DInput">
                  <textarea rows="4" cols="40" name="DogInfo" placeholder="Additional details" required></textarea>
                </div>

                <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                <div style="margin-left: 5%;" class="image-preview">
                  <img src="../image/upload.png" style="border: black 1px dotted;" alt="Upload Dog Picture" id="image-preview">
                  <a href="#" id="choose-file-btn">Choose Images</a>
                </div>
              </div>
              <div class="button" style="max-width: 34%;">
                <input style="color: white;" type="submit" name="submit" value="Post">
              </div>
            </div>

          </form>
        </div>
      </span> -->
<!-- Upload dog for adoption end -->