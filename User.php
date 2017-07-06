<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author tal
 */
class User {
    
    private $id;
    private $password;
    
    public function __construct($id, $password) {
        $this->id = $id;
        $this->password = $password;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}