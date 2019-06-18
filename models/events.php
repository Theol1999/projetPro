<?php

class events {

   //je crée mes attributs en fonction des champs de ma table royaiki_users dans ma base de données
   //1 attribut = 1 champs
   //mes attributs sont publics car je veux pouvoir les afficher donc les appeler en dehors de ma classe.
   public $id = 0;
   public $title = '';
   public $picture = '';
   public $dateHour = '1970-01-01';
   public $zipCode = '';
   public $content = '';
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

   public function addEvent() {
      $query = 'INSERT INTO `royaiki_events`(`title`, `content`, `dateHour`, `zipCode`, `id_royaiki_eventCategories`, `id_royaiki_eventStatus`) '
              . ' VALUES (:title, :content, :dateHour, :zipCode, 1, 1)';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':title', $this->title, PDO::PARAM_STR);
      $queryExecute->bindValue(':content', $this->content, PDO::PARAM_STR);
      $queryExecute->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
      $queryExecute->bindValue(':zipCode', $this->zipCode, PDO::PARAM_STR);
      $queryExecute->execute();
      return $queryExecute->fetch(PDO::FETCH_OBJ);
   }

   public function showEvent() {
      $query = 'SELECT `royaiki_events`.`id`, `title`, `category`, `content`, `zipCode`, DATE_FORMAT(`dateHour`, \'%d/%m/%Y\') AS `dateHour`, `id_royaiki_eventStatus`  '
              . 'FROM `royaiki_events` '
              . 'INNER JOIN `royaiki_eventCategories` ON `royaiki_events`.`id_royaiki_eventCategories` = `royaiki_eventCategories`.`id`';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->execute();
      return $queryExecute->fetchAll(PDO::FETCH_OBJ);
   }

   public function showEventById() {
      $query = 'SELECT `title`, `content`, `dateHour`, `zipCode` '
              . 'FROM `royaiki_events` '
              . 'WHERE `id` = :id';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
      $queryExecute->execute();
      return $queryExecute->fetch(PDO::FETCH_OBJ);
   }

   public function deleteEvent() {
      $query = 'DELETE FROM `royaiki_events` '
              . 'WHERE `id` = :id';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':id', $this->id, PDO::PARAM_STR);
      $queryExecute->execute();
      return $queryExecute->fetchAll(PDO::FETCH_OBJ);
   }

   public function updateEvent() {
      $query = 'UPDATE `royaiki_events` SET `title`=:title,`content`=:content,`dateHour`=:dateHour,`zipCode`=:zipCode,`id_royaiki_eventCategories`= 1,`id_royaiki_eventStatus`= 1 '
              . 'WHERE `id` = :id';
      $queryExecute = $this->db->prepare($query);
      $queryExecute->bindValue(':title', $this->title, PDO::PARAM_STR);
      $queryExecute->bindValue(':content', $this->content, PDO::PARAM_STR);
      $queryExecute->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
      $queryExecute->bindValue(':zipCode', $this->zipCode, PDO::PARAM_STR);
      $queryExecute->bindValue(':id', $this->id, PDO::PARAM_STR);
      return $queryExecute->execute();
   }

}
