<?php

class realisateur{
    private $_nom;
    private $_prenom;
    private $_date;
    private $_sexe;
    private $_filmographie;

    public function __construct($prenom, $nom, $date, $sexe){
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_date = $date;
    $this->_sexe = $sexe;
    $this->_filmographie = [];
    }

    //getter & setter

    public function getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        $this->_nom = $nom;
        return $this;
    }
    
    public function getPrenom() {
        return $this->_prenom;
    }
    public function setPrenom($prenom) {
        $this->_prenom= $prenom;
        return $this;
    }

    public function getDate(){
        return $this->_date;
    }
    public function setDate($date){
        $this->_date = $date ;
        return $this;
    }

    public function getSexe() {
        return $this->_sexe;
    }
    public function setSexe($sexe) {
        $this->_sexe = $sexe;
        return $this;
    }

    public function getFilmographie(){
        return $this->_filmographie;
    }

    public function setFilmographie($filmographie){
        $this->_filmographie = $filmographie;
        return $this;
    }

    public function addFilm(Film $film){
        $this->_filmographie[] = $film;
    }

    public function getFilms(){
        $result = "<div class='mainInfos'><h2>$this </h2>";
        $result .= "<div class='infos'>
                        <strong>Date de naissance :</strong> ".$this->getDate()." ".$this->getAge()."<br/>
                        <strong>Sexe :</strong> ".$this->getSexe()."<br/>
                    </div>";
        $result .= "<h3>Filmographie</h3><ul>";
        
        foreach($this->_filmographie as $film){
            $result .= "<li>".$film." (".$film->getSortie().")</li>";
        }
        $result .= "</ul></div>";
        return $result;
    }

     // Methode

    public function getAge() {
        $dateajd = new Datetime ();
        $date = new Datetime ($this->_date); // Convertir une date en chaine de caract
        $interval = $date->diff ($dateajd) ;
        return $interval->format("%y ans");
    }
    

    public function  __toString(){
        return "".$this->getPrenom()." ".$this->getNom()." [".$this->getSexe()."] (".$this->getAge().") <br/>" ;
    }
}