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

    function createPost(Posts $post) {
        // TODO: Crée un dossier
        if (!is_dir("posts")) {
            mkdir("posts");
        }
        // TODO: serialize le post
        $postserial = serialize($post);
        // TODO: stock le post sur disque
        $new_post = fopen("posts/" . $post->titre . ".txt", "w");
        fwrite($new_post, $postserial);
        fclose($new_post);
    }

    function readPostsList(): Array {
        // TODO: Liste les poste sauvegardé (dossier)
        $post = scandir('posts', SCANDIR_SORT_NONE);

        $postab = [];
        foreach ($post as $file) {
            if (is_dir($file)) {
                continue;
            }
            // TODO: unserialize chaque poste
            $postunserial = unserialize(file_get_contents('posts/' . $file));
            // TODO: ajoute le poste à un tableau
            array_push($postab, $postunserial);
            // TODO: retourne le tableau
        }

        return $postab;
    }

}
