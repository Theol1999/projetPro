<?php

if (empty($_SESSION['id_royaik_userGroups']) || $_SESSION['id_royaik_userGroups'] != 2) {
   header('location: index.php');
} elseif (empty($_GET['id'])) {
   
} else {
   require_once 'models/events.php';
   $events = new events();
   $events->id = htmlspecialchars($_GET['id']);
   $event = $events->showEventById();
   if (count($_POST) > 0) {
      $formErrors = array();


      if (!empty($_POST['title'])) {
         if (true) {
            $events->title = htmlspecialchars($_POST['title']);
         } else {
            $formErrors['title'] = 'error';
         }
      } else {
         $formErrors['title'] = 'error';
      }

      if (!empty($_POST['picture'])) {
         $events->picture = $_POST['picture'];
      } else {
         $formErrors['picture'] = 'error';
      }

      if (!empty($_POST['dateHour'])) {
         $events->dateHour = $_POST['dateHour'];
      } else {
         $formErrors['dateHour'] = 'error';
      }

      if (!empty($_POST['zipCode'])) {
         $events->zipCode = $_POST['zipCode'];
      } else {
         $formErrors['zipCode'] = 'error';
      }

      if (!empty($_POST['content'])) {
         $events->content = $_POST['content'];
      } else {
         $formErrors['content'] = 'error';
      }

      if (count($formErrors) == 0) {
         if ($events->updateEvent()) {
            header('location: listeEvent.php');
         } else {
            $formErrors['error'] = 'error';
         }
      }
   }
}

