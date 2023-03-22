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






}


?>