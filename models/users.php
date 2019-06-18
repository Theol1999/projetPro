<?php
//on crée notre classe users (objet) 
class users {
   //je crée mes attributs en fonction des champs de ma table royaiki_users dans ma base de données
  //1 attribut = 1 champs
   //mes attributs sont publics car je veux pouvoir les afficher donc les appeler en dehors de ma classe.
  public $id = 0;
  public $lastName = '';
  public $firstName = '';
  public $birthDate = '1970-01-01';
  public $password = '';
  public $mail = '';
  //mon attribut bdd est privé car je ne l'utilise qu'à l'interieur de la classe
  private $db = NULL;

  public function __construct() {
      // j'utilise un try catch pour essayer (try) de me connecter à ma base de données,
    // et si il y a une erreur je l'attrape (catch) et j'arrete le code (die) et j'affiche l'erreur (getMessage)
    try {
       //Mon attribut db devient un objet PDO, il va me permettre de me connecter à ma base de données
      // Il a besoin d'une phrase de connexion :
      //host = localhost - il s'agit de l'hote sur lequel est hebergé mon site
      //dbname = aikidoRoye - c'est la base de données que je vais utiliser
      //charset = utf8 - permet de conserver les caractères spéciaux qui sont récupérés de la base de données
      //les deux autres parametres de PDO sont :
      //le nom d'utilisateur permettant de se connecter à la base et son mot de passe
      $this->db = new PDO('mysql:host=localhost;dbname=aikidoRoye;charset=utf8', 'theol', 'theol10071999');
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }

  public function addUser() {
     //je prépare ma requete qui me permet de créer un utilisateur et je la stocke dans une variable
    //attention ne pas oublier l'espace à la fin de ma premiere ligne si je fais la requete sur deux lignes.
    $query = 'INSERT INTO `royaiki_users` (`lastName`, `firstName`, `mail`, `password`, `birthDate`, `id_royaik_userGroups`) '
            . 'VALUES (:lastName, :firstName, :mail, :password, :birthDate, 1)';
    //$this->db->query($query) me permet d'executer ma requete (query($query)) dans ma base de données ($this->db)
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
    $queryExecute->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $queryExecute->bindValue(':password', $this->password, PDO::PARAM_STR);
    $queryExecute->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
    return $queryExecute->execute();
  }

  public function getEmailRegister() {
     $query = 'SELECT `mail` FROM `royaiki_users` '
                    . 'WHERE `mail` = :mail';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $queryExecute->execute();
    return $queryExecute->fetch(PDO::FETCH_OBJ);
  }

  public function updateUser() {
    $query = 'UPDATE `royaiki_users` SET `lastName` = :lastName, `firstName`= :firstName, `mail` = :mail, `birthDate` = :birthDate '
            . 'WHERE `id` = :id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
    $queryExecute->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $queryExecute->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_STR);
    return $queryExecute->execute();
  }
  
   public function deleteUser() {
        $query = 'DELETE FROM `royaiki_users` '
                . 'WHERE `id` = :id';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $queryExecute->execute();
    }
  

  
  public function checkUser() {
     $query = 'SELECT COUNT(`id`) as `number` '
             . 'FROM `royaiki_users` '
             . 'WHERE `mail` = :mail';
     $queryExecute = $this->db->prepare($query);
     $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
     $queryExecute->execute();
     return $queryExecute->fetch(PDO::FETCH_OBJ);
  }
  
  public function getUserByMail() {
     $query = 'SELECT `id`, `password`, `firstName`, `lastName`, `mail`, `birthDate`, `id_royaik_userGroups` '
             . 'FROM `royaiki_users` '
             . 'WHERE `mail` = :mail';
     $queryExecute = $this->db->prepare($query);
     $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
     $queryExecute->execute();
     return $queryExecute->fetch(PDO::FETCH_OBJ);
  }
 
  public function __destruct() {
     //je remets à NULL mon attribut db pour detruire ma connexion à la base
     $this->db = NULL;
  }
}
