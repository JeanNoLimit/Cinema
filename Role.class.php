<?php

class Role {
    private string $_nom;
    private array $_listeCasting;

    public function __construct(string $nom){
        $this->_nom=$nom;
        $this->_listeCasting=[];

    }

    public function getNom(){
        return $this->_nom;
    }
    public function setNom($newNom){
        $this->_nom=$newNom;
    }
//pour l'affichage de la fonction qui liste les acteurs pour un rôle donné
    public function __toString(){
        return $this->getNom();
    }
//Pour ajouter le casting correspondant à un rôle donné
    public function addFilmRole(Casting $casting){
        return $this->_listeCasting[]=$casting;
    }
// Pour gérer l'affichage les acteurs ayant incarné un rôle précis
    public function getRole(){
        $result="<h4>Les acteurs ayant joué le rôle de". $this."</h4>";
        foreach($this->_listeCasting as $casting){
            $result.=$casting->get_acteur()." dans ".$casting->get_film()."<br>";
        }
        return $result; 
    }




}


?>