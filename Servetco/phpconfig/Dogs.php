<?php 



  include_once 'config.php';



  if(isset($_POST["submit"])){
    $DogInfo = $_POST["DogInfo"];
    $Name = $_POST["Name"];
    $Age = $_POST["Age"];
    $Gender = $_POST["Gender"];
      
    if($_FILES["image"]["error"] == 4){
      echo
      "<script> alert('Image does not exist'); </script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png', 'gif'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if ( !in_array($imageExtension, $validImageExtension) ){
        echo
        "
        <script>
          alert('Invalid image extension');
        </script>
        ";
      }
      else{
  
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
  


  
  function display_data(){
    global $con;
    $query = "select * from dogs";
    $result = mysqli_query($con,$query);
    return $result;
  }

 
?>



