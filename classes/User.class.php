<?php   
class User{
  public $name;
  public $password;
  
  function __construct($name, $password){
    $this->name = $name;
    $this->password = $password;
  }
  
  function getName(){
    return $this->name;
  }
}