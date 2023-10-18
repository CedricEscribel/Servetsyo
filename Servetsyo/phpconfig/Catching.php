<?php 
  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $BarangayID = $_POST['BarangayID'];
     $ContNum = $_POST['ContNum'];
     $DogCount = $_POST['DogCount'];
     $Notes = $_POST['Notes'];
     
     
     $sql = "INSERT INTO catch (BarangayID,ContNum,DogCount,Notes,status) 
     VALUES ('$BarangayID','$ContNum','$DogCount','$Notes','Pending')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../index.php";
        </script>';
        die;
      }

  }

  function display_data(){
    global $con;
    $query = "select * from catch";
    $result = mysqli_query($con,$query);
    return $result;
  }


  if (isset($_POST['btnHideSubmit'])) {
    $id = $_POST['id'];
    $status = $_POST['hiddenStatus'];
  
    $sql = "UPDATE catch SET status =  '$status' WHERE DogCatch_id = $id ";
  
    $Save = mysqli_query($con, $sql);
    if ($status === 'Approve') {
      echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/DogCatching.php";
          </script>';
      die;
    }else{
      echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/DogCatching.php";
          </script>';
    }
  }