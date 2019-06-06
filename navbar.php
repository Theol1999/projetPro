<header>
   <!--Navbar-->
   <nav class="fixed-top">
      <div class="logo">
         <h1>Roye Aïkido Jeunes</h1>
      </div>
      <ul class="nav-links">
         <li>
            <a href="index.php">Accueil</a>
         </li>
         <li>
            <a href="event.php">Événements</a>
         </li>
         <li>
            <a href="horaires.php">Horaires</a>
         </li>
         <li>
            <a href="profilUser.php">Photos</a>
         </li>
         <li>
            <a href="historique.php">Histoire de l'Aïkido</a>
         </li>
         <li class="nav-item dropdown">
            <?php if (!empty($_SESSION)) {
               ?><a class="dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Mon profil</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item disabled" href=""><?= $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] ?></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="profil.php">Consulter mon profil</a>
                  <a class="dropdown-item" href="controllers/logoutCtrl.php">Se déconnecter</a>
               </div>
            <?php } else {
               ?> 
               <a href="login.php">Se connecter / S'inscrire</a> 
            <?php } ?>
         </li>
      </ul>
      <div class="burger">
         <div class="line1"></div>
         <div class="line2"></div>
         <div class="line3"></div>
      </div>
   </nav>
</header>
<!--/.Navbar-->