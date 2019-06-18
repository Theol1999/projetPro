<header>
   <!--Navbar-->
   <nav class="fixed-top">
      <div class="logo">
         <h1><a class="nav-link" href="index.php">Roye Aïkido Jeunes</a></h1>
      </div>
      <ul class="nav-links">
         <?php 
            if (!empty($_SESSION['id_royaik_userGroups']) && $_SESSION['id_royaik_userGroups'] == 2){
            ?>   
               <li class="nav-item dropdown">
               <a class="dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-shield"></i> Administration</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="listeEvent.php">Liste des événements</a>
                  <a class="dropdown-item" href="listeMember.php">Liste des membres</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="addEvent.php">Ajouter un événement</a>
                  <a class="dropdown-item" href="addMember.php">AJouter un membre</a>
               </div>
         <?php } else { ?>
               <a href="index.php">Accueil</a>
         <?php } ?>
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
                  <a class="dropdown-item" href="commentaire.php">Laisser un commentaire</a>
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