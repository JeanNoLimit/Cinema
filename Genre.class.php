<?php

class Genre {

    private string $_nomGenre;
    private array $_listeFilms;

    public function __construct(string $nomGenre){

        $this->_nomGenre=$nomGenre;
        $this->_listeFilms=[];
    }

    public function get_nomGenre()
    {
        return $this->_nomGenre;
    }


    public function set_nomGenre($_nomGenre)
    {
        $this->_nomGenre = $_nomGenre;

        return $this;
    }
    
    // methode pour récupérer la liste des films du genre
    public function addFilm(Film $film){
        $this->_listeFilms[]=$film;
    }


//methode toString pour l'affichage du genre
    public function __toString(){
        return "<h3>Genre : ". $this->get_nomGenre(). " -> ".count($this->_listeFilms)." films</h3>";
    }
    //méthode d'affiche de la liste des films d'un genre donné :
    public function getGenre(){
        $result=$this;
        foreach($this->_listeFilms as $film){
            $result.=$film;

        }
        return $result;
    }



}




?>