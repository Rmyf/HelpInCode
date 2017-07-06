<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author tal
 */

include_once './User.php';
class Database {

    function createUser(User $user) {

        $user->getId();



        if (!is_dir("utilisateur")) {
            mkdir("utilisateur");
        }
        $userserial = serialize($user);

        $new_file = fopen("utilisateur/" . $user->getId() . ".txt", "w");
        fwrite($new_file, $userserial);
        fclose($new_file);
    }

    function connect($id, $mdp) {

        if (is_file('utilisateur/' . $id . '.txt')) {
            $user = unserialize(file_get_contents('utilisateur/' . $id . '.txt'));
            
            if ($user->getPassword() == md5($mdp)) {
                
                return $user;
            }
        }
        return FALSE;
    }


}
