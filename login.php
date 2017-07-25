<?php

include_once 'Database.php';

session_start();

$db = new Database();


if (isset($_POST['id']) && isset($_POST['password'])) {
    $id = htmlspecialchars($_POST['id']);
    $mdp = htmlspecialchars($_POST['password']);

    $crypt2 = md5($mdp);

    $user = $db->connect($id, $mdp);
    
    if ($user) {
        $_SESSION['utilisateur'] = $user;
        header('Location: index.php');
        
    } else {

        echo "Erreur d'authentification!". '<br/>';
        
        echo '<a href="index.php">Retour à l\'accueil</a>';
        
    }
}
    






