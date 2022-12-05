<?php 

include "../classes/User.php";

// create object / instantiate
$user_obj= new User;

$user_obj->login($_POST);
// $_POST contain all values of the input
?>