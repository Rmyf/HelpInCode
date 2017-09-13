<?php
session_start();
include_once './User.php';
include_once 'Database.php';
    

if(empty($_POST['login']) 
    || empty($_POST['password']))
      {
    $_SESSION['error'] = '!Login ou mot de passe manquant!';
    header('Location: formulaire.php');
      } else {
    
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars ($_POST['password']);
    
    $crypt2 = md5($mdp);
    
    $user = new User($login, $crypt2);
    $database = new Database();
//    $user->getId();
    $database->createUser($user);
    $_SESSION['utilisateur'] = $user;
        header('Location: index.php');
         
      }
  
  
 

