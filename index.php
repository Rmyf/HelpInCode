<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Ajouter un article</title>
    </head>

    <body class="container">


        <?php
        include_once 'User.php';
        include_once 'Database.php';
        include_once 'Posts.php';



        session_start();

        include 'header.php';

        if (isset($_SESSION['utilisateur'])) {
            ?>
            <div class="addlink">
                <a href="formpost.php" class="btn btn-primary">Ajouter un article</a>
            </div>
        <?php } ?>

        <?php
        $database = new Database();
        $post = $database->readPostsList();

        foreach ($post as $article) {
            echo '<div class="border">';
            echo "<h3>" . $article->titre . "</h3>";
            echo "<h5>" . $article->categorie . "</h5>";
            echo "<p>" . $article->contenu . "</p>";
            echo "<form action = 'delete.php' method = 'POST'>";
            echo "<input type = 'hidden' name = 'filename' value = '".$article->titre."'>";
            echo '<input type = "submit" value = "Supprimer" class="btn btn-warning">';
            echo "</form>";
            echo "</div>";
        }

        // TODO: lit les posts depuis la base de données
        // TODO: affiche chaque post
        ?>
    </body>
</html>
