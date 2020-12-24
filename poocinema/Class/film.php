<?php 

class film {
    private $_titre;
    private $_sortie;
    private $_duree;
    private $_genre;
    private $_realisateur;
    private $_synopsis;
    private $distribution;

    public function __construct(string $titre= "",  $sortie, int $duree= 0, genre $genre, realisateur $realisateur, $synopsis= ""){
        $this->_titre = $titre;
        $this->_sortie = $sortie;
        $this->_duree = $duree;
        $this->_genre = $genre;
        $this->_realisateur = $realisateur;
        $this->_synopsis = $synopsis;
        $this->distribution = [];
        $this->_realisateur->addFilm($this);
        $this->_genre->addFilm($this);
    }

    // getter et setter

    public function getTitre(){
        return $this->_titre;
    }
    public function setTitre($titre){
        $this->_titre = $titre;
        return $this;
    }

    public function getSortie(){
        return $this->_sortie;
    }
    public function setSortie($sortie){
        $this->_sortie = $sortie;
        return $this;
    }

    public function getDuree(){
        return $this->_duree;
    }
    public function setDuree($duree){
        $this->_duree = $duree;
        return $this;
    }

    public function getGenre() {
        return $this->_genre;
    }
    public function setGenre($genre) {
        $this->_genre = $genre;
        return $this;
    }

    public function getRealisateur(){
        return $this->_realisateur;
    }
    public function setRealisateur($realisateur){
        $this->_realisateur = $realisateur;
        return $this;
    }
    public function getSynopsis(){
        return $this->_synopsis;
    }
    public function setSynopsis($synopsis){
        $this->_synopsis = $synopsis;
        return $this;
    }


    public function getDistribution(){
        return $this->distribution;
    }

    public function addCasting(Casting $casting){
        if (!in_array($casting, $this->distribution)) $this->distribution[] = $casting;
    }

    public function afficherInfos(){
        $result = "<div class='mainInfos'><h2>".$this."</h2>"; 
        // Affichage des infos du films
        $result .= "<div class='infos'><strong>Genre :</strong> ".$this->getGenre()."<br/>
                    <strong>Réalisateur :</strong> ".$this->getRealisateur()." ".$this->getRealisateur()->getAge()."<br/>
                    <strong>Année :</strong> ".$this->getAnnee()."<br/>
                    <strong>Durée :</strong> ".$this->getDuree()."<br/>
                    <strong>Synopsis :</strong> ".$this->getSynopsis()."</div><h3>Casting</h3><ul>";
        // Affichage du casting du film
        if(count($this->distribution) > 0) {
            foreach ($this->distribution as $distribution) {
                
                $result .= "<li>".$distribution->getActeur()." (".$distribution->getRole().")</li>";
            }
        } else {
            $result .= "<li class='warning'>Aucun casting défini</li>";
        }
        $result .= "</ul></div>";
        return $result;
    }

    public function  __toString(){
        return "Titre: ".$this->getTitre()."<br/> Date de sortie (France): ".$this->getSortie().". <br/> Durée: ".$this->getDuree()." mins. <br/> Réalisateur: ".$this->getRealisateur()."<br/> <u> Synopsis</u> <br/>".$this->getSynopsis()."<br/>";
    }




}