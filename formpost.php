<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <div class="container">
        <h1>Ecrire un article</h1>

        <section class="formulaire">
            <form action="createpost.php" method="POST">


                <section class="formpost">

                    <label for="cat">Catégorie: </label>
                    <input type="text" name="cat" required/>
                    <br/>

                    <label for="title">Titre:</label>
                    <input type="text" name="title" required/>
                    <br/>

                    <label for ="text" </label>
                    <textarea name="text" placeholder="Tapez votre texte ici" autofocus=""accesskey=""rows="10" cols="50"></textarea>

                    <input type="submit" value="Valider"/>


            </form>
        </section>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
