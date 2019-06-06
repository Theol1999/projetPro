<?php
class users {
  public $id = 0;
  public $lastName = '';
  public $firstName = '';
  public $birthDate = '1970-01-01';
  public $password = '';
  public $mail = '';
  private $db = NULL;

  public function __construct() {
    try {
      $this->db = new PDO('mysql:host=localhost;dbname=aikidoRoye;charset=utf8', 'theol', 'theol10071999');
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }

  public function addUser() {
    $query = 'INSERT INTO `royaiki_users` (`lastName`, `firstName`, `mail`, `password`, `birthDate`, `id_royaik_userGroups`) '
            . 'VALUES (:lastName, :firstName, :mail, :password, :birthDate, 1)';
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
     $query = 'SELECT `id`, `password`, `firstName`, `lastName`, `mail`, `birthDate` '
             . 'FROM `royaiki_users` '
             . 'WHERE `mail` = :mail';
     $queryExecute = $this->db->prepare($query);
     $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
     $queryExecute->execute();
     return $queryExecute->fetch(PDO::FETCH_OBJ);
  }

  public function __destruct() {
     $this->db = NULL;
  }
}
