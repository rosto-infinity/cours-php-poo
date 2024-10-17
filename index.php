<?php 
require_once("classes/User.class.php");
require_once("classes/Admin.class.php");

$user1 = new User("Eva", "1234");
$user2 = new User("Waffo", "0000");
$admin = new Admin("Eva Admin", "1234", true);


echo $user1->getName(). '<br>';
echo $user2->getName(). '<br>';

// echo $admin->getName(). '<br>';index.php