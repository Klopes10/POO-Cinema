<?php

class acteur {
    private $_prenom;
    private $_nom;
    private $_sexe;
    private $_date;
    private $_role;
    private $filmographie;


    public function __construct ($prenom, $nom, $sexe, $date, $role) {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_date = $date;
        $this->_sexe = $sexe;
        $this->_role = $role;
        $this->filmographie = [];
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
    
    public function getRole() {
        return $this->_role;
    }
    public function setRole($role) {
        $this->_role = $role;
        return $this;
    }

    public function getFilmographie(){
        return $this->filmographie;
    }

    public function setFilmographie($filmographie){
        $this->filmographie = $filmographie;
        return $this;
    }

    public function addCasting(Casting $casting){
        if (!in_array($casting, $this->filmographie)) $this->filmographie[] = $casting;
    }

    public function getFilmsRole(){
        $result = "<div class='mainInfos'><h2>$this </h2>";
        $affAge = ($this->isDead()) ? "" : "-";
        $affSexe = ($this->getSexe() == "Masculin") ? "♂" : "♀";
        $result .= "<div class='infos'>
                        <strong>Date de naissance :</strong> ".$this->getDateNaissance()->format("d-m-Y")." $affAge ".$this->getAge()."<br/>
                        <strong>Sexe : </strong><span class='sexe'>$affSexe</span><br/>
                    </div>";
        $result .= "<h3>Filmographie</h3><ul>";
        if(count($this->filmographie) > 0){
            foreach($this->filmographie as $filmo){
                $result .= "<li>".$filmo->getFilm()." (".$filmo->getRole().")</li>";
            }
        } else {
            $result .= "<li class='warning'>Aucune filmographie</li>";
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
        return "".$this->getPrenom()." ".$this->getNom()." [".$this->getSexe()."] (".$this->getAge().") joue le rôle de ".$this->getRole()."<br/> ";
    }



}