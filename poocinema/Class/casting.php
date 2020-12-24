<?php

class casting {

    // Propriétés
    private $acteur;
    private $role;
    private $film;

    // Constructeur
    public function __construct($acteur, $role, $film){
        $this->acteur = $acteur;
        $this->role = $role;
        $this->film = $film;
        $this->acteur->addCasting($this);
        $this->role->addCasting($this);
        $this->film->addCasting($this);
    }

    // Accesseurs / Mutateurs
    public function getActeur(){
        return $this->acteur;
    }
    public function getRole(){
        return $this->role;
    }
  
    public function getFilm(){
        return $this->film;
    }
}