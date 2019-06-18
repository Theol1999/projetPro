<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
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
</head>
    <?php include ('navbar.php') ?>
  <div class="pimg1p2">
    <div class="ptext">
      <p class="border2">Localisation du Dojo et Horaires des cours</p>
    </div>
  </div>
  <section class="section section-dark">
    <h2>Localisation</h2>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <p>Les cours ont lieu au dojo de Roye, Rue du Beffroi(entre l’hôtel de ville et l’école Jeanne d’Arc)</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2580.733024932113!2d2.7889170159069687!3d49.69700017937848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7e7208c79cc01%3A0xca318183b15c502e!2s22+Rue+du+Beffroi%2C+80700+Roye!5e0!3m2!1sfr!2sfr!4v1555408855174!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  <div class="pimg2p2">
    <div class="ptext">
       <p class="border2">La sagesse ne peut venir que de l'expérience.</p>
    </div>
  </div>
  <section class="section section-dark">
    <h2>Horaires</h2>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="work">
            <h2 id="wednesday">Cours du mercredi</h2>
            <h3 id="children">Enfants :</h3>
            <ul class="list">
              <li>
                <span>Niveau 1 : 16h30 à 17h15</span>
              </li>
              <li>
                <span>Niveau 2 : 17h30 à 18h15</span>
              </li>
              <li>
                <span>Niveau 3 : 18h30 à 19h15</span>
              </li>
            </ul>
            <h3 id="children">Adultes :</h3>
            <ul class="list">
              <li>
                <span>Niveau 4 : 19h30 à 21h00</span>
              </li>
            </ul>
            <h2 id="saturday">Cours du samedi</h2>
            <ul class="list">
              <li>
                <span>Si le nombre de pratiquants est suffisant (>4) : 10h30 à 12h00</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="pimg3p2"></div>
  <?php include ('footer.php') ?>
  </body>
</html>