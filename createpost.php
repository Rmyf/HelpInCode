<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'Posts.php';
include_once 'User.php';
include_once 'Database.php';

session_start();

if (!empty($_POST['cat']) && !empty($_POST['title'])&& !empty($_POST['text'])) {
    $cat = htmlspecialchars($_POST['cat']);
    $title = htmlspecialchars($_POST['title']);
    $contenu= htmlspecialchars($_POST['text']);
    
    $auteur= $_SESSION['utilisateur']->getId();
    $post=new Posts($cat, $title, $contenu, $auteur);
    // TODO: sauvegarder le poste dans la base de données
    $database=new database();
    
    $database->createPost($post);
    
    header('Location: index.php');
    
    
    
}

