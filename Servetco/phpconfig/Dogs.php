<?php 

    error_reporting(0);

    $msg = "";

  include_once 'config.php';

  if(isset($_POST['save']))
  {	      
     $Name = $_POST['Name'];
     $DogInfo = $_POST['DogInfo'];
     $Age = $_POST['Age'];
     $Gender = $_POST['Gender'];
     $CatchLocation = $_POST['CatchLocation'];

      $DogImg = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "dogs/" . $DogImg;

     $sql = "INSERT INTO dogs(Name, DogInfo, Age, Gender, CatchLocation, DogImg) 
     VALUES ('$Name','$DogInfo','$Age','$Gender','$CatchLocation', '$DogImg')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        die(header("Location: ../Admindashboard/Adoption.php"));
      }
      
      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder)) {
        echo "<h3> Image uploaded successfully!</h3>";
      } else {
        echo "<h3> Failed to upload image!</h3>";
      }
  }

  function display_data(){
    global $con;
    $query = "select * from dogs";
    $result = mysqli_query($con,$query);
    return $result;
  }


 
?>

