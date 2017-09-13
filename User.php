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
    
    private $login;
    private $password;
    
    public function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }
    
    public function getId() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId($login) {
        $this->login = $login;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}