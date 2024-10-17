<?php   
class Admin extends User {
  public $admin; // Propriété publique pour stocker le statut d'administrateur de l'utilisateur

  /**
   * Constructeur de la classe Admin
   *
   * @param string $name     Le nom de l'utilisateur
   * @param string $password Le mot de passe de l'utilisateur
   * @param bool $admin      Le statut d'administrateur de l'utilisateur
   */
  public function __construct($name, $password, $admin) {
      parent::__construct($name, $password); // Appelle le constructeur de la classe parente
      $this->admin = $admin; // Initialise la propriété $admin de la classe Admin
  }

  /**
   * Retourne le statut d'administrateur de l'utilisateur
   *
   * @return bool Le statut d'administrateur de l'utilisateur
   */
  public function getAdmin() {
      return $this->admin;
  }

  /**
   * Redéfinir (ou surchager)  la méthode getName de la classe parente User
   * Cette méthode appelle la méthode getName de la classe parente puis affiche un message supplémentaire
   */
  public function getName() {
      parent::getName(); // Appelle la méthode getName de la classe parente
      echo ' depuis la classe étendue <br>'; // Affiche un message supplémentaire
  }
}
// classes/Admin.class.php













//class Admin extends User {
 
// private $admin; // Propriété privée pour le statut d'administrateur

//   public function __construct($name, $password, $admin) {
//       parent::__construct($name, $password);
//       $this->setAdmin($admin); // Utilisation d'une méthode pour définir le statut d'administrateur
//   }

//   public function setAdmin($admin) {
//       $this->admin = $admin;
//   }

//   public function isAdmin() {
//       return $this->admin;
//   }
//}