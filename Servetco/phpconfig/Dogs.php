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

// Image to folder
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;
      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $sql = "INSERT INTO dogs(Name, DogInfo, Age, Gender, CatchLocation, DogImg, image) 
      VALUES ('$Name','$DogInfo','$Age','$Gender','$CatchLocation', '$DogImg', $newImageName)";
 
     // insert in database 
       $Save = mysqli_query($con, $sql);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'data.php';
      </script>
      ";
      die(header("Location: ../Admindashboard/Adoption.php"));
    }
    // image send end
    //  $sql = "INSERT INTO dogs(Name, DogInfo, Age, Gender, CatchLocation, DogImg) 
    //  VALUES ('$Name','$DogInfo','$Age','$Gender','$CatchLocation', '$DogImg')";

    // // insert in database 
    //   $Save = mysqli_query($con, $sql);
      // if($Save)
      // {
      //   die(header("Location: ../Admindashboard/Adoption.php"));
      // }
      
  }

  function display_data(){
    global $con;
    $query = "select * from dogs";
    $result = mysqli_query($con,$query);
    return $result;
  }


 
?>

