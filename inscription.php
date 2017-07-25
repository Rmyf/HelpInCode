<?php
session_start();
include_once './User.php';
include_once 'Database.php';
    

if(empty($_POST['id']) 
    || empty($_POST['password']))
      {
    $_SESSION['error'] = '!Login ou mot de passe manquant!';
    header('Location: formulaire.php');
      } else {
    
    $id = htmlspecialchars($_POST['id']);
    $mdp = htmlspecialchars ($_POST['password']);
    
    $crypt2 = md5($mdp);
    
    $user = new User($id, $crypt2);
    $database = new Database();
//    $user->getId();
    $database->createUser($user);
    $_SESSION['utilisateur'] = $user;
        header('Location: index.php');
         
      }
  
  
 

