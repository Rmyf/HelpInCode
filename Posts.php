<?php

class Posts {

    public $categorie;
    public $titre;
    public $contenu;
    public $date;
    public $auteur;

    function __construct($categorie, $titre, $contenu, $auteur) {
        $this->categorie = $categorie;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date = new DateTime();
        $this->auteur = $auteur;
    
    }

}