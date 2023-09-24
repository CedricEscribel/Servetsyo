<?php 
    include "../phpconfig/config.php";
    
if(isset($_POST['Fullname']) && 
   isset($_POST['Email']) &&  
   isset($_POST['Password']) && 
   isset($_POST['Address']) && 
   isset($_POST['PhoneNum'])
   ){
   
    $Fullname = $_POST['Fullname'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $PhoneNum = $_POST['PhoneNum'];

    $data = "Fullname=".$Fullname."&Email=".$Email."&Address=".$Address."&PhoneNum=".$PhoneNum;
    
    if (empty($Fullname)) {
    	$em = "Full name is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;

    }else if(empty($Password)){
    	$em = "Password is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;

      }else if(empty($Address)){
         $em = "Address is required";
         header("Location: ../login.php?error=$em&$data");
         exit;
         
      }else if(empty($PhoneNum)){
         $em = "Phone Number Number is required";
         header("Location: ../login.php?error=$em&$data");
         exit;       
           
        }else  {
            $Password = password_hash($Password, PASSWORD_DEFAULT);


            $sql = "INSERT INTO user (Fullname, Email, Password, Address, PhoneNum) 
                    VALUES(?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$Fullname, $Email, $Password, $Address, $PhoneNum]);

            header("Location: ../login.php?success=Your account has been created successfully");
            exit;
        }

}else {
	header("Location: ../login.php?error=error");
	exit;
}


