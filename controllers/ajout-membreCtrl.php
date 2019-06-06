<?php

require 'models/users.php';
$regexFirstname = '%^([A-Z][a-zÀ-ÖØ-öø-ÿ]+)([- ][A-Z][a-zÀ-ÖØ-öø-ÿ]+)*$%';
$regexMail = '#^[\w._-]+@[\w.-_]+[.][a-z]+$#';
$regexDate = '#^[0-9]{4}-(0[0-9]|1[0-2])-([0-2][0-9]|3[0-1])#';


$formErrors = array();
if (count($_POST) > 0) {
   $userAdd = new users();

   if (!empty($_POST['form-type'])) {
      if ($_POST['form-type'] == 'signup') {
         if (!empty($_POST['lastName'])) {
            if (preg_match($regexFirstname, $_POST['lastName'])) {
               $userAdd->lastName = htmlspecialchars($_POST['lastName']);
            } else {
               $formErrors['lastName'] = 'Veuillez renseigner un nom de famille valide';
            }
         } else {
            $formErrors['lastName'] = 'Veuillez renseigner votre nom de famille';
         }

         if (!empty($_POST['firstName'])) {
            if (preg_match($regexFirstname, $_POST['firstName'])) {
               $userAdd->firstName = htmlspecialchars($_POST['firstName']);
            } else {
               $formErrors['firstName'] = 'Veuillez renseigner un prénom valide';
            }
         } else {
            $formErrors['firstName'] = 'Veuillez renseigner votre prénom';
         }

         if (!empty($_POST['birthDate'])) {
            if (preg_match($regexDate, $_POST['birthDate'])) {
               $userAdd->birthDate = htmlspecialchars($_POST['birthDate']);
            } else {
               $formErrors['birthDate'] = 'Veuillez renseigner une date valide';
            }
         } else {
            $formErrors['birthDate'] = 'Veuillez renseigner votre date de naissance';
         }

         if (!empty($_POST['mail'])) {
            if (preg_match($regexMail, $_POST['mail'])) {
               $userAdd->mail = htmlspecialchars($_POST['mail']);
               if ($userAdd->getEmailRegister() != false) {
                  $formErrors['mail'] = 'L\'adresse mail existe déjà';
               }
            } else {
               $formErrors['mail'] = 'Veuillez renseigner un mail valide';
            }
         } else {
            $formErrors['mail'] = 'Veuillez renseigner votre mail';
         }

         if (!empty($_POST['password'])) {
            if (!empty($_POST['passwordValid'])) {
               if ($_POST['password'] == $_POST['passwordValid']) {
                  $userAdd->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
               } else {
                  $formErrors['passwordValid'] = 'Votre  mot de passe n\'est pas identique';
               }
            } else {
               $formErrors['password'] = 'Veuillez renseigner une confirmation de mot de passe';
            }
         } else {
            $formErrors['password'] = 'Veuillez renseigner un mot de passe';
         }

         if (count($formErrors) == 0) {
            if ($userAdd->addUser()) {
               $formSuccess = 'Enregistrement effectué';
            } else {
               $formErrors['add'] = 'Une erreur est survenue';
            }
         }
      } else {
         if (!empty($_POST['mail'])) {
            if (preg_match($regexMail, $_POST['mail'])) {
               $userAdd->mail = htmlspecialchars($_POST['mail']);
            } else {
               $formErrors['mail'] = 'Veuillez renseigner un mail valide';
            }
         } else {
            $formErrors['mail'] = 'Veuillez renseigner votre mail';
         }

         if (empty($_POST['password'])) {
            $formErrors['password'] = 'Veuillez renseigner un mot de passe';
         }

         if (count($formErrors) == 0) {
            $check = $userAdd->checkUser();
            if ($check->number == 1) {
               $user = $userAdd->getUserByMail();
               if (password_verify($_POST['password'], $user->password)) {

                  if (session_status() !== PHP_SESSION_ACTIVE) {
                     session_start();
                  }
                  $_SESSION['id'] = $user->id;
                  $_SESSION['firstName'] = $user->firstName;
                  $_SESSION['lastName'] = $user->lastName;
                  $_SESSION['mail'] = $user->mail;
                  $_SESSION['birthDate'] = $user->birthDate;
                  header('location: ../index.php');
               } else {
                  $formErrors['mail'] = 'L\'email et/ou le mot de passe est invalide';
                  $formErrors['password'] = 'L\'email et/ou le mot de passe est invalide';
               }
            } else {
               $formErrors['mail'] = 'L\'email et/ou le mot de passe est invalide';
               $formErrors['password'] = 'L\'email et/ou le mot de passe est invalide';
            }
         }
      }
   } else {
      $formErrors['form-type'] = 'Une erreur est survenu';
   }
}

//               if ($userAdd->getEmailRegister() != false) {
//                  $formErrors['mail'] = 'L\'adresse mail existe déjà';
//               }

