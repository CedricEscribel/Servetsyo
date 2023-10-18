<?php 

function getUserById($user_id, $db){
    
    $sql = "SELECT * FROM user WHERE user_id = ?";
	$stmt = $db->prepare($sql);
	$stmt->execute([$user_id]);
    
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        return $user;
    }else {
        return 0;
    }
}

 ?>