<?php

class Realisateur extends Personne{

    private array $_listeFilms;

    public function __construct(string $nom, string $prenom, string $sexe, string $dNais){
        parent::__construct($nom, $prenom, $sexe, $dNais);
        $this->_listeFilms=[];

    }
    public function getListeFilm(){
        return $this->_listeFilms;
    }
    public function setListeFilm(){
        $this->_listeFilms;
    }

    public function __toString(){
        return "<h3> filmographie de réalisateur ".$this->getNom()." ".$this->getPrenom(). " : </h3>"; 
    } 

    public function addFilm(Film $film){
        $this->_listeFilms[]=$film;
    }

    public function getFilmReal(){
         $result=$this;
        foreach($this->_listeFilms as $film){
            $result.=$film;
        }
        return $result;
    }
}


?>