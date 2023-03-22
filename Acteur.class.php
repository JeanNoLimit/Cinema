<?php

class Acteur extends Personne {

    
    private array $_listeCasting;
    private Role $_role;

    public function __construct(string $nom, string $prenom, string $sexe, string $dNais){
        parent::__construct($nom, $prenom, $sexe, $dNais);
        $this->_listeCasting=[];
   
    }
    public function getCasting(){
        return  $this->_listeCasting;
    }
    public function setCasting($newCast){
        $this->_listeCasting=$newCast;
    }
    
    public function __toString(){
        return $this->getPrenom()." ".$this->getNom();

    }

    public function addFilmActeur(Casting $casting){
        return $this->_listeCasting[]=$casting;
    }
// fonction pour gere l'affichage de la filmographie d'un acteur. Recupère dans la liste de casting de l'acteur
    public function getFilmActeur(){
        $result="<h3> filmographie de l'acteur ".$this .  " : </h3>";
        foreach($this->_listeCasting as $casting){
            //on appele les fonctions de la class Casting
            $result.=$casting->get_film()."<br>";
        }
        return $result;
    }

}

?>