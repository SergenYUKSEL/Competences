<?php

declare(strict_types=1);


class Activite
{

    private  $id_activite;

    private  $nom;



    /**
     * Default constructor
     */
    public function __construct($id_activite,$nom)
    {
        $this->_id_activite=$id_activite;
        $this->_nom=$nom;
    }

    public function getid_activite(){ return $this->_id_activite;}
    public function getnom(){ return $this->_nom;}


    public function setid_activite(int $newid_activite)
    { 
        $this->_id_activite=$newid_activite;
    }
    public function setnom(string $newnom)
    { 
        $this->_nom=$newnom;
    }

}
