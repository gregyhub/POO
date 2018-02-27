<?php

abstract class Film
{
    private $_titre;
    private $_duree;
    private $_realisateur;


    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }
    public function set_duree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }
    public function set_realisateur($_realisateur)
    {
        $this->_realisateur = $_realisateur;

        return $this;
    }
    public function get_titre()
    {
        return $this->_titre;
    }


    public function get_duree()
    {
        return $this->_duree;
    }
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

}

class Cinema extends Film {

}