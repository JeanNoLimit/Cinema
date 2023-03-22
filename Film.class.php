<?php

class Film {

    private string $_titre;
    private string $_date;
    private int $_duree;
    private Realisateur $_realisateur;
    // private string $_synopsys; a voir en dernier
    private Genre $_genre;
    private array $_listeCasting;

     public function __construct (string $titre, string $date, int $duree,Realisateur $realisateur, Genre $genre){
        $this->_titre=$titre;
        $this->_date=$date;
        $this->_duree=$duree;
        $this->_realisateur=$realisateur;
        $this->_realisateur->addFilm($this);
        $this->_listeCasting=[];
        $this->_genre=$genre;
        $this->_genre->addFilm($this);

     }


    public function get_titre()
    {
        return $this->_titre;
    }

    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    public function get_date()
    {
        return $this->_date;
    }

    public function set_date($_date)
    {
        $this->_date = $_date;

        return $this;
    }

    public function get_duree()
    {
        return $this->_duree;
    }

    public function set_duree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }

    public function get_realisateur()
    {
        return $this->_realisateur;
    }

    public function set_realisateur($_realisateur)
    {
        $this->_realisateur = $_realisateur;

        return $this;
    }

    public function get_genre()
    {
        return $this->_genre;
    }

    public function set_genre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }


    public function get_listeCasting()
    {
        return $this->_listeCasting;
    }


    public function set_listeCasting($_listeCasting)
    {
        $this->_listeCasting = $_listeCasting;

        return $this;
    }
//fonction qui récupère l'année de sortie du film pour l'affichage.
    public function getAnne(){
        $date=$this->get_date();
        $dateT= DateTime::createFromFormat('d/m/Y', $date);
        return $dateT->format('Y');
    }
// Pour l'affichage d'un film. On veut toujours afficher son année (Pour gerer l'eventualité de 2 films ayant le même titre)
    public function __toString(){
        return $this->get_titre()." (".$this->getAnne().")<br>";
    }
// Fonction pour ajouter le casting complet d'un film
    public function addFilmCasting(Casting $casting){
        return $this->_listeCasting[]=$casting;
    }

    public function getFilmCasting(){
        $result="<h3> Casting du film :" . $this. "</h3>";
        foreach ($this->_listeCasting as $casting){
            $result.=$casting->get_role(). " à été incarné par : " . $casting->get_acteur(). "<br>";
        }
        return $result;
    }


}


?>