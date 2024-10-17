<?php   

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