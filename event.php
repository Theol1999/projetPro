<?php
session_start();
require_once 'controllers/eventCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>ホ Roye Aïkido Jeunes </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
      <link rel="stylesheet" href="css/event.css" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
   </head>
   <body class="eventBody">
      <?php include ('navbar.php') ?>
      <section class="card__list row">
         <?php
         foreach ($allEvent as $event) { ?>
         <div class="card__box col-md-12 col-sm-12">
               <div class="card">
                  <div class="card__img">
                     <img class="card__img-preview" src="img/bridge.jpg" alt="Image name">
                     <div class="card-img-overlay"><span class="badge badge-pill badge-danger"><?= $event->category ?></span> </div>
                  </div>
                  <div class="card__content">
                     <h4 class="card__title awhite"><?= $event->title ?></h4>
                     <p class="card__text"><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $event->zipCode ?></p>
                     <p class="card__description"><?= $event->content ?></p>
                     <div class="card__bottom">
                        <div class="options">
                           <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?= $event->dateHour ?></span>
                           <span class="category"><i class="fa fa-tag" aria-hidden="true"></i> <?= $event->category ?></span>
                        </div>
                        <div class="card__price">
                           <a class="awhite" href="#">je participe</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div><!-- /card__box -->
         <?php } ?>
      </section>
      <?php include ('footer.php') ?>
   </body>
</html>

