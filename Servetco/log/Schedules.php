<?php
$sql = "SELECT user.user_id, user.Fullname, user.Email, insemination.Animal 
FROM user 
INNER JOIN insemination
ON user.user_id=insemination.user_id
WHERE EXISTS (SELECT user_id FROM user WHERE user.user_id = insemination.user_id AND user_id = ";



?>