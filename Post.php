<?php

class Posts {

    public $categorie;
    public $titre;
    public $contenu;
    public $votes;
    public $date;
    public $auteur;

    function __construct($categorie, $titre, $contenu, $date, $auteur, $votes) {
        $this->categorie = $categorie;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date = $date;
        $this->auteur = $auteur;
        $this->votes = $votes;
    }

    

}
