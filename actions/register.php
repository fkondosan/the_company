<?php 

include "../classes/User.php";

// create object or instantiate

$user_obj= new User;

$user_obj->store($_POST);

?>