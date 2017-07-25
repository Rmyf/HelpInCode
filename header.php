<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <a href='index.php'class="navbar-text navbar-left title">{ } Help'In Code</a>



        <?php
        if (isset($_SESSION['utilisateur'])) {
            ?>  




            <div class=" text-center navbar-text navbar-right">
                <a href="logout.php"> Log Out</a>
            </div>
            <div class="navbar-text navbar-right">
                <p><?php echo'Bienvenue, ' . $_SESSION['utilisateur']->getId() ?></p>
            </div>
        </div>
    </nav>


<?php } else { ?>

    <div class="test navbar-text navbar-right">
        <a href="formconnect.php"class="connect">Log In</a>
        <a href="forminscript.php">Sign Up</a>

    </div>
    
    </nav>


<?php } ?>




