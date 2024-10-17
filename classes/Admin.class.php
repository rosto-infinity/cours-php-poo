<?php   

$user1 = new User("John", "1234");
$user2 = new User("Mary", "0000");

class Admin extends User{
  public $admin;
  
  function __construct($name, $password, $admin){
    parent::__construct($name, $password);
    $this->admin = $admin;
  }
  
  function getAdmin(){
    return $this->admin;
  }
}