<?php

class Personne {

    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected string $_dNais;

    public function __construct(string $nom, string $prenom, string $sexe, string $dNais){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_sexe=$sexe;
        $this->_dNais=$dNais;
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getSexe(){
        return $this->_sexe;
    }
    public function getNais(){
        return $this->_dNais;
    }
    public function setNom($nNom){
        $this->_nom=$nNom;
    }
    public function setPrenom($nPrenom){
        $this->_prenom=$nPrenom;
    }
    public function setSexe($nSexe){
        $this->_sexe=$nSexe;
    }
    public function setNais($nNais){
        $this->_dNais=$nNais;
    }

        //fonction getAge permet de calculer l'age de l'acteur ou du Réalisateur.
        public function getAge(string $dateN){
            $dateNTemp= DateTime::createFromFormat('d/m/Y', $dateN);
            $d=new DateTime("now");
            $diff = date_diff($dateNTemp, $d);
            return $diff->format('%y');        
        }

}



?>