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
     if($_FILES["DogImg"]["error"] == 4){
      echo
      "<script> alert('Image Does Not Exist'); </script>"
      ;
    }
    else{
      $fileName = $_FILES["DogImg"]["name"];
      $fileSize = $_FILES["DogImg"]["size"];
      $tmpName = $_FILES["DogImg"]["tmp_name"];
  
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
        $query = "INSERT INTO tb_upload VALUES('', `$DogInfo`, `$Name`, `$Age`, `$Gender`, `$CatchLocation`, '$newImageName')";
        mysqli_query($conn, $query);
        echo
        "
        <script>
          alert('Successfully Added');
          document.location.href = '../Admindashboard/Adoption.php';
        </script>
        ";
      }
    }

  

      
  }

  
  function display_data(){
    global $con;
    $query = "select * from dogs";
    $result = mysqli_query($con,$query);
    return $result;
  }

 
?>



