<?php

declare(strict_types=1);


class Bloc
{

    private  $id_bloc;

    private  $nom;


    /**
     * Default constructor
     */
    public function __construct($id_bloc,$nom)
    {
        $this->_id_bloc=$id_bloc;
        $this->_nom=$nom;
    }

    public function getid_bloc(){ return $this->_id_bloc;}
    public function getnom(){ return $this->_nom;}

    public function setid_bloc(int $newid_bloc)
    { 
        $this->_id_bloc=$newid_bloc;
    }
    public function setnom(string $newnom)
    { 
        $this->_nom=$newnom;
    }

}
