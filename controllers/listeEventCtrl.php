<?php
if (empty($_SESSION['id_royaik_userGroups']) || $_SESSION['id_royaik_userGroups'] != 2){
   header('location: index.php');
} else {
   require_once 'models/events.php';
   $events = new events();
   if (count($_POST) > 0) {
      $formerror = array();
      if (!empty($_POST['idDelete'])) {
         if (true) {
            $events->id = $_POST['idDelete'];
         } else {
            $formerror['idDelete'] = '';
         }
      } else {
         $formerror['idDelete'] = '';
      }
      
      if (count($formerror) == 0) {
         if ($events->deleteEvent()) {
            $success = '';
         } else {
            $formerror['errorDelete'] = '';
         }
      }
   }
   $allEvent = $events->showEvent();
}