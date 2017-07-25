<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dbsql
 *
 * @author tal
 */
class Dbsql {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=user_db', 'rmyf', 'tallfu45');

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
   
    //create new User
    
    function new_user(Utilisateur $user) {
        $query = $this->db->prepare("INSERT INTO users (id, password, email, reg_date) " .
                "VALUES (:id, :password, :email, :reg_date);");
        $query->bindValue(':id', $user->getNom());
        $query->bindValue(':password', $user->getPassword());
        $query->bindValue(':email', $user->getEmail());
        $query->bindValue(':reg_date', 'NOW()');
        $query->execute();
        return TRUE;
    }

}
