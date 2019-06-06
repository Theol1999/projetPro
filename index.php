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
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include ('navbar.php') ?>
  <div class="pimg1">
    <div class="ptext">
      <p class="border2">Bienvenue sur le site du club d'Aïkido de Roye</p>
    </div>
  </div>
  <section class="section section-dark">
    <h2>Actualités</h2>
    <div class="container2">
      <div class="row">
        <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12 col-12">
          <div id="calendar" class="calendar"></div>
        </div>
      </div>
    </div>
</section>
<div class="pimg2">
  <div class="ptext">
    <p class="border2">Un art martial,un art de vivre.</p>
  </div>
</div>
<section class="section section-dark">
  <h2>Lu dans la presse</h2>
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card-deck h-80">
          <div class="card">
            <img src="img/CP2012.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title"></h3>
              <p class="card-text"><small class="text-muted" id="textMute">Courrier Picard Juin 2012.</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card-deck h-80">
          <div class="card">
            <img src="img/CP2013_1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title"></h3>
              <p class="card-text"><small class="text-muted">Courrier Picard juillet 2013.</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="  card-deck h-80" id="LastCard">
          <div class="card">
            <img src="img/CP2014_1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h3 class="card-title"></h3>
              <p class="card-text"><small class="text-muted">Courrier Picard juin 2014.</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="pimg3"></div>
<?php include ('footer.php') ?>
</body>
</html>
