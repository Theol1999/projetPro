<?php

require 'models/users.php';
$regexId = '#^[0-9]+#';
 // j'instancie mon objet user
   // $users devient un objet users et à accès à tous les attributs et toutes les methodes
$user = new users();
if (!empty($_SESSION['id'])) {
   if (preg_match($regexId, $_SESSION['id'])) {
      $user->id = htmlspecialchars($_SESSION['id']);
   } else {
      $formErrors['add'] = 'Une erreur est survenue';
   }
} else {
   $formErrors['add'] = 'Une erreur est survenue';
}
if (isset($_GET['delete'])) {
   $user->deleteUser();
   session_destroy();
   header('Location: ../login.php');
} else {
   $regexFirstname = '%^([A-Z][a-zÀ-ÖØ-öø-ÿ]+)([- ][A-Z][a-zÀ-ÖØ-öø-ÿ]+)*$%';
   $regexMail = '#^[\w._-]+@[\w.-_]+[.][a-z]+$#';
   $regexDate = '#^[0-9]{4}-(0[0-9]|1[0-2])-([0-2][0-9]|3[0-1])#';
   $formErrors = array();
   if (count($_POST) > 0) {

      if (!empty($_POST['lastName'])) {
         if (preg_match($regexFirstname, $_POST['lastName'])) {
            $user->lastName = htmlspecialchars($_POST['lastName']);
         } else {
            $formErrors['lastName'] = 'Veuillez renseigner un nom de famille valide';
         }
      } else {
         $formErrors['lastName'] = 'Veuillez renseigner votre nom de famille';
      }

      if (!empty($_POST['firstName'])) {
         if (preg_match($regexFirstname, $_POST['firstName'])) {
            $user->firstName = htmlspecialchars($_POST['firstName']);
         } else {
            $formErrors['firstName'] = 'Veuillez renseigner un prénom valide';
         }
      } else {
         $formErrors['firstName'] = 'Veuillez renseigner votre prénom';
      }

      if (!empty($_POST['birthDate'])) {
         $user->birthDate = htmlspecialchars($_POST['birthDate']);
      } else {
         $formErrors['birthDate'] = 'Veuillez renseigner votre date de naissance';
      }

      if (!empty($_POST['mail'])) {
         if (preg_match($regexMail, $_POST['mail'])) {
            $user->mail = htmlspecialchars($_POST['mail']);
         } else {
            $formErrors['mail'] = 'Veuillez renseigner un mail valide';
         }
      } else {
         $formErrors['mail'] = 'Veuillez renseigner votre mail';
      }

      if (count($formErrors) == 0) {
         if ($user->updateUser()) {
            $formSuccess = 'Modification effectuée';
            $_SESSION['lastName'] = $user->lastName;
            $_SESSION['firstName'] = $user->firstName;
            $_SESSION['birthDate'] = $user->birthDate;
            $_SESSION['mail'] = $user->mail;
         } else {
            $formErrors['add'] = 'Une erreur est survenue';
         }
      }
   }
}
?>


