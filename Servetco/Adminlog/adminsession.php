<?php 

function getUserById($admin_id, $db){
    
    $sql = "SELECT * FROM adminuser WHERE admin_id = ?";
	$stmt = $db->prepare($sql);
	$stmt->execute([$admin_id]);
    
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        return $user;
    }else {
        return 0;
    }
}

 ?>