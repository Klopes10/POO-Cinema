<?php

class genre {
    
    // Propriétés
    private $nomGenre;
    private $films;

    // Constructeur
    public function __construct(string $nomGenre = ""){
        $this->nomGenre = $nomGenre;
        $this->films = [];
    }
    
    // Accesseurs / Mutateurs
    public function getNomGenre(){
        return $this->nomGenre;
    }

    public function setNomGenre($nomGenre){
        $this->nomGenre = $nomGenre;
        return $this;
    }

    public function getFilms(){
        return $this->films;
    }

    public function setFilms($films){
        $this->films = $films;
        return $this;
    }

    public function addFilm(Film $film){
        $this->films[] = $film;
    }

    public function getAllFilms(){
        $result = "<div class='mainInfos'><h2>Films du genre : $this</h2><ul>";
        if(count($this->films) > 0){
            foreach($this->films as $film){
                $result .= "<li>".$film->getTitre()." (".$film->getAnnee().")</li>";
            }
        } else {
            $result .= "<li class='warning'>Aucun film recensé pour le moment</li>";
        }
        $result .= "</ul></div>";
        return $result;
    }
}