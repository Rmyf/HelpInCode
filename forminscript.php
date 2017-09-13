<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



        <title>Inscription</title>

    </head>

    

    <?php
    include_once 'User.php';
    session_start();


    if (isset($_SESSION['error'])) {
        echo '<p>' . $_SESSION['error'] . '</p>';
    } else {
        ?>
        <div class="container">
        <h1>Inscription</h1>
        <form action="inscription.php" method="POST" class="col-sm-6">
            <section class="formhigh">
                <label for="login">*Login:</label>
                <input type="text" name="login" placeholder="Identifiant" required/>
                <br/>
                <label for ="photo">Age: </label>
                <input type="date" name="age" />
                <br/>
                <label for ="photo">Photo: </label>
                <input type="file" placeholder="choisissez votre fichier"/>
                <br/>
                <label for ="mail" >*Email: </label>
                <input type="email" name="email" placeholder="email"required >
                <br/>
                <label for="password">*Password:</label>
                <input type="password" name="password" required />
                <br/>

                <input type="submit" value="Inscription">
            </section>
        <?php } ?>
    </form>
    </div>
</html>
