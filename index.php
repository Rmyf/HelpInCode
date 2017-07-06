<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1> Site </h1>


        <?php
        include_once 'User.php';


        session_start();

        if (isset($_SESSION['utilisateur'])) {

            $user = $_SESSION['utilisateur'];

            echo 'Bienvenue, ' . $user->getId() . '<br/>';
            echo '<a href="logout.php">Deconnexion</a>';
        } else {
            echo '<a href="formulaire.php">Sign Up</a><br/>';

            echo '<a href="connexion.php">Log In</a>';
        }
        ?>
    </body>
</html>
