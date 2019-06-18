<?php

if (empty($_SESSION['id_royaik_userGroups']) || $_SESSION['id_royaik_userGroups'] != 2) {
   header('location: index.php');
} else {
   require_once 'models/events.php';
   if (count($_POST) > 0) {
      $formErrors = array();
      $events = new events();

      if (!empty($_POST['title'])) {
         if (true) {
            $events->title = htmlspecialchars($_POST['title']);
         } else {
            $formErrors['title'] = 'error';
         }
      } else {
         $formErrors['title'] = 'error';
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
         $events->addEvent();
      }
   }
}