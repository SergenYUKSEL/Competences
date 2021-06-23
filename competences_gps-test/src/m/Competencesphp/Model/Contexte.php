<?php

declare(strict_types=1);


class Contexte
{

    private  $id_contexte;

    private  $contexte;


    /**
     * Default constructor
     */
    public function __construct($id_contexte,$contexte)
    {
        $this->_id_contexte=$id_contexte;
        $this->_contexte=$contexte;
    }


    public function getid_contexte(){ return $this->_id_contexte;}
    public function getcontexte(){ return $this->_contexte;}

    public function setid_contexte(int $newid_contexte)
    { 
        $this->_id_contexte=$newid_contexte;
    }
    public function setcontexte(string $newcontexte)
    { 
        $this->_contexte=$newcontexte;
    }

}
