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
        <h1>Ecrire un article</h1>

        <section class="formulaire">
            <form action="post.php" method="POST">


                <section class="formpost">

                    <label for="cat">Catégorie: <br/></label>
                    <input type="text" name="cat" required/>
                    <br/>

                    <label for="title">Titre:<br/></label>
                    <input type="text" name="title" required />

                    <label for ="text" placeholder="Tapez votre texte ici"</label>
                    <textarea name="textarea" autofocus=""accesskey=""rows="10" cols="50"></textarea>

                    <input type="submit" value="Valider"/>


                    </form>
                </section>
                <?php
                // put your code here
                ?>
                </body>
                </html>
