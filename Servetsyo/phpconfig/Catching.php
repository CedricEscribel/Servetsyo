<?php 
  include_once 'config.php';

  if(isset($_POST['save']))
  {	 
     $BarangayID = $_POST['BarangayID'];
     $Fullname = $_POST['Fullname'];
     $ContNum = $_POST['ContNum'];
     $DogCount = $_POST['DogCount'];
     $Notes = $_POST['Notes'];
     
     
     $sql = "INSERT INTO catch (BarangayID,Fullname,ContNum,DogCount,Notes,status) 
     VALUES ('$BarangayID','$Fullname','$ContNum','$DogCount','$Notes','Pending')";

    // insert in database 
      $Save = mysqli_query($con, $sql);
      if($Save)
      {
        echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../service.php";
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

  if (isset($_POST['setdate'])) {
    $id = $_POST['id'];
    $SetDate = $_POST['SetDate'];
  
    $sql = "UPDATE catch SET SetDate =  '$SetDate' WHERE DogCatch_id = $id ";
    $Save = mysqli_query($con, $sql);
    if ($Save) {
      echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/DogCatching.php";
          </script>';
    }
  }