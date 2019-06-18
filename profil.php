<?php session_start();
require 'controllers/update-membreCtrl.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ホ Roye Aïkido Jeunes </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
      <link rel="stylesheet" href="assets/css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   </head>
   <body>
      <?php include ('navbar.php') ?>
      <div class="page-wrapper bg-gra-02 p-t-180 p-b-100 font-poppins">
         <div class="wrapper wrapper--w780">
         <div class="card card-3" id="registerForm">
               <div class="card-heading2"></div>
               <div class="card-body">
                  <h2 class="title">Mes informations</h2>
                  <form method="POST" action="profil.php">
                     <div class="input-group">
                        <!--Je vérifie que la session n'est pas vide -->
                       <?php if (!empty($_SESSION)) {
                     ?>
                        <!--Je récupère dans le valeur de mon input la donnée stocké dans ma session pour l'afficher-->
                        <input class="input--style-3" type="text" name="lastName" id="lastname" value="<?= $_SESSION['lastName'] ?>" required placeholder="Nom">
                        <!--Si l'erreur lastName existe alors j'affiche une alert avec l'erreur preparé pour lastName-->
                        <?php if (isset($formErrors['lastName'])) { ?>
                           <div class="alert-danger">
                              <p><?= $formErrors['lastName'] ?></p>
                           </div>
                        <?php } ?>
                     </div>
                     <div class="input-group">
                        <input class="input--style-3" type="text" name="firstName" id="firstname" value="<?= $_SESSION['firstName'] ?>" required placeholder="Prénom">
                        <?php if (isset($formErrors['firstName'])) { ?>
                           <div class="alert-danger">
                              <p><?= $formErrors['firstName'] ?></p>
                           </div>
                        <?php } ?>
                     </div>
                     <div class="input-group">
                        <label for="birthday">Date de naissance :</label>
                        <input class="input--style-3" type="date" name="birthDate" id="birthdate" value="<?= $_SESSION['birthDate'] ?>" required>
                        <?php if (isset($formErrors['birthDate'])) { ?>
                           <div class="alert-danger">
                              <p><?= $formErrors['birthDate'] ?></p>
                           </div>
                        <?php } ?>
                     </div>
                     <div class="input-group">
                        <input class="input--style-3" type="mail" name="mail" id="mail" value="<?= $_SESSION['mail'] ?>" required placeholder="adresse email">
                        <?php if (isset($formErrors['mail'])) { ?>
                           <div class="alert-danger">
                              <p><?= $formErrors['mail'] ?></p>
                           </div>
                        <?php } ?>
                     </div>
                     <input class="d-none" type="text" name="form-type" value="signup">
                     <!-- Si mes données mise dans mon formulaire sont bien envoyé en base de données j'affiche un message de succés à l'utilisateur -->
                     <?php if (isset($formSuccess)) { ?>
                           <div class="alert-success formSuccess">
                              <p><?= $formSuccess ?></p>
                           </div>
                     <!-- Sinon si il y'a une erreur j'affiche l'erreur avec le message d'erreur correspondant -->
                        <?php } else if (isset($formErrors['add'])){?>
                           <div class="alert-danger">
                              <p><?= $formErrors['add'] ?></p>
                           </div>
                        <?php
                        } ?>
                     <?php } else if (isset($formErrors['add'])) {
                      ?> 
                     <?php $formErrors['add'] ?> 
                     <?php } ?>
                     <div class="p-t-10">
                        <button class="btn btn--pill btn-submit2" type="submit" name="edit">Modifier</button>
                        <a class="btn btn--pill btn-submit2" href="profil.php?delete=delete">Supprimer</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php include ('footer.php') ?>
   </body>
</html>


