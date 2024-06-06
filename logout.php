<!-- DebutInPHP
     version 1.O
     by David Nogent, 2024
-->
<?php

session_start(); // Démarrez la session si ce n'est pas déjà fait

require_once(__DIR__ . '/functions.php');

// Détruire la session
session_unset();
session_destroy();

// Rediriger l'utilisateur vers la page d'accueil
redirectToUrl('page5.php');
