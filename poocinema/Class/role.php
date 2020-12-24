<?php 

class role {
    
    // Propriétés
    private $nomPersonnage;
    private $castings;

    // Constructeur
    public function __construct(string $nomPersonnage = ""){
        $this->nomPersonnage = $nomPersonnage;
        $this->castings = [];
    }
    
    // Accesseurs / Mutateurs
    public function getNomPersonnage(){
        return $this->nomPersonnage;
    }

    public function setNomPersonnage($nomPersonnage){
        $this->nomPersonnage = $nomPersonnage;
        return $this;
    }

    public function getCastings(){
        return $this->castings;
    }

    public function setCastings($castings){
        $this->castings = $castings;
        return $this;
    }

    public function addCasting(Casting $casting){
        if (!in_array($casting, $this->castings)) $this->castings[] = $casting;
    }

    public function getActeursFilms(){
        $result = "<div class='mainInfos'><h2>Acteurs ayant incarné le rôle : $this</h2><ul>";
        foreach($this->castings as $element){
            $result .= "<li>".$element->getActeur()." (".$element->getFilm()." - ".$element->getFilm()->getAnnee().")</li>";
        }
        $result .= "</ul></div>";
        return $result;
    }

    public function __toString(){
        return $this->nomPersonnage;
    }
}