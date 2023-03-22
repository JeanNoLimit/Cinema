<?php

class Casting {
    private Acteur $_acteur;
    private Role $_role;
    private Film $_film;

    public function __construct( Acteur $acteur,Role $role, Film $film){

        $this->_acteur=$acteur;
        $this->_role=$role;
        $this->_film=$film;
    }
    

    public function get_role()
    {
        return $this->_role;
    }

    public function set_role($_role)
    {
        $this->_role = $_role;

        return $this;
    }

    public function get_acteur()
    {
        return $this->_acteur;
    }

    public function set_acteur($_acteur)
    {
        $this->_acteur = $_acteur;

        return $this;
    }

    public function get_film()
    {
        return $this->_film;
    }

    public function set_film($_film)
    {
        $this->_film = $_film;

        return $this;
    }
}


?>