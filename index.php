<?php 
require_once("classes/User.class.php");

$user1 = new User("Eva", "1234");
$user2 = new User("Waffo", "0000");
echo $user1->getName(). '<br>';
echo $user2->getName(). '<br>';