<?php
session_start();
//La session se détruit, on est déconnecté
session_destroy();
//À la deconnexion je rédirige l'utilisateur vers la page d'accueil
header('location: ../index.php');
exit;

