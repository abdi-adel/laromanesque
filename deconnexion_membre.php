<?php 
    session_start();

    // Suppression des variables de session et de la session
    $_SESSION = array();
    session_destroy();

    // Suppression des cookies de connexion automatique
    setcookie('login', '');
    setcookie('pass_hache', '');

    echo 'vous êtes déconnecté. A très bientôt sur notre site!'
?>