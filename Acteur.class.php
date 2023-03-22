<?php

class Acteur extends Personne {

    
    private array $_listeCasting;
    private Role $role;

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
}

?>