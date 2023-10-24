<?php

include_once 'config.php';

if (isset($_POST['save'])) {
  $Name = $_POST['Name'];
  $ContNum = $_POST['ContNum'];
  $Animal = $_POST['Animal'];
  $Coordinates = $_POST['Coordinates'];
  $Details = $_POST['Details'];
  $user_id = $_POST['user_id'];
  $status = $_POST['status'];

  $sql = "INSERT INTO insemination (Name,ContNum,Animal,Coordinates,Details,user_id,status) 
     VALUES ('$Name','$ContNum','$Animal','$Coordinates','$Details','$user_id','Pending')";

  // insert in database 
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../index.php";
        </script>';
  }
}


function display_data()
{
  global $con;
  $query = "select * from insemination";
  $result = mysqli_query($con, $query);
  return $result;
}


if (isset($_POST['btnHideSubmit'])) {
  $id = $_POST['id'];
  $status = $_POST['hiddenStatus'];

  $sql = "UPDATE insemination SET status =  '$status' WHERE Insemination_ID = $id ";

  $Save = mysqli_query($con, $sql);
  if ($status === 'Approve') {
    echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/ArtInsemination.php";
          </script>';
    die;
  } else {
    echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/ArtInsemination.php";
          </script>';
  }
}



if (isset($_POST['setdate'])) {
  $id = $_POST['id'];
  $SetDate = $_POST['SetDate'];

  $sql = "UPDATE insemination SET SetDate = '$SetDate' WHERE Insemination_ID = $id ";
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo '<script type="text/javascript">
  window.location.href = "../Admindashboard/ArtInsemination.php";
</script>';
  }
}
