<?php

abstract class Modele {
    public function __construct($params = array())
    {
        //instancie les valeur passées en paramètres
        foreach($params as $key => $value){
            $methode = 'set'.ucfirst($key);
            if(method_exists($this, $methode)){
                //la methode existe, je set la valeur
                $this->$methode($value);
            }
        }
    }

    public function __set($key=null, $value=null)
    {
        $methode = 'set'.ucfirst($key);
        if(method_exists($this, $methode)){
            //la methode existe, je set la valeur
            $this->$methode($value);
        }
    }

    public function __get($key=null)
    {
        $methode = 'get'.ucfirst($key);
        if(method_exists($this, $methode)){

            //la methode existe, je set la valeur
            return $this->$methode();
        }
    }
}