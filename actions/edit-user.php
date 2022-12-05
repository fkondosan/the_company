<?php 

include "../classes/User.php";

$use_obj = new User;
$use_obj->update($_POST, $_FILES);

?>