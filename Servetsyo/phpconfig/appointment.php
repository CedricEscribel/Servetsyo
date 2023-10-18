<?php
include_once 'config.php';
  if(ISSET($_POST['filter'])){
    $status=$_POST['status'];
    
    $query=mysqli_query($con, "SELECT * FROM `schedule` WHERE `status`='$status'");
    while($fetch=mysqli_fetch_array($query)){
        echo"<tr>
        <td>".$fetch['FullN']."</td>
        <td>".$fetch['PhoneNum']."</td>
        <td>".$fetch['Sched']."</td>
        <td>".$fetch['PetName']."</td>
        <td>".$fetch['Breed']."</td>
        <td>".$fetch['Color']."</td>
        <td>".$fetch['Age']."</td>
        <td>".$fetch['Gender']."</td>
        <td>".$fetch['Message']."</td>
       ";
    }
}else if(ISSET($_POST['reset'])){
    $query=mysqli_query($con, "SELECT * FROM `schedule`") ;
    while($fetch=mysqli_fetch_array($query)){
        echo"<tr><td>".$fetch['Sched']."</td><td>".$fetch['status']."</td></tr>";
    }
}else{
    $query=mysqli_query($con, "SELECT * FROM `schedule`");
    while($fetch=mysqli_fetch_array($query)){
        echo"<tr><td>".$fetch['Sched']."</td><td>".$fetch['status']."</td></tr>";
    }
}



