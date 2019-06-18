<?php
session_start();
require_once 'controllers/listeEventCtrl.php';
?>
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
      <link rel="stylesheet" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   </head>
   <body class="adminBack">
      <?php require 'navbar.php'; ?>
      <a href="index.php" class="btn btn-danger">Retour à l'acceuil</a>
      <a href="ajout-patient.php" class="btn btn-info">enregistrer un nouveau événement</a>
      <table class="table table-striped text-center">
         <thead>
            <tr class="thead-dark">
               <th>Titre</th>
               <th> Type</th>
               <th>Description</th>
               <th>Lieu</th>
               <th>Date</th>
               <th>Supprimer l'événement</th>
               <th>Modifier l'événement</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($allEvent as $event) { ?>
               <tr>
                  <td><?= $event->title ?></td>
                  <td><?= $event->category ?></td>
                  <td><?= $event->content ?></td>
                  <td><?= $event->zipCode ?></td>
                  <td><?= $event->dateHour ?></td>
                  <td><a class="deleteButton editIcon" data-id="<?= $event->id ?>" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></td>
                  <td><a class="editIcon" href="updateEvent.php?id=<?= $event->id ?>"><i class="fas fa-edit"></i></a></td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
      <div class="spacing"></div>
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <form action="" method="POST">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalCenterTitle">Suppression d'évenements</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <p>Voulez-vous vraiment supprimer cet évenement ?</p>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                     <button id="deleteConfirm" type="submit" name="idDelete" class="btn btn-danger">Confirmer</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <?php require 'footer.php'; ?>
   </body>
</html>
