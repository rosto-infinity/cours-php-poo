<?php   
class User {
  private $name; // Propriété privée pour stocker le nom de l'utilisateur
  private $password; // Propriété privée pour stocker le mot de passe de l'utilisateur

  /**
   * Constructeur de la classe User
   *
   * @param string $name     Le nom de l'utilisateur
   * @param string $password Le mot de passe de l'utilisateur
   */
  public function __construct($name, $password) {
      $this->name = $name; // Initialise la propriété $name de l'utilisateur
      $this->password = $password; // Initialise la propriété $password de l'utilisateur
  }

  /**
   * Retourne le nom de l'utilisateur
   *
   * @return string Le nom de l'utilisateur
   */
  public function getName() {
      return $this->name;
  }

  /**
   * Retourne le mot de passe de l'utilisateur
   *
   * @return string Le mot de passe de l'utilisateur
   */
  public function getPassword() {
      return $this->password;
  }

}


// classes/User.class.php