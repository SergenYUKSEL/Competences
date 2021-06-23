<?php

declare(strict_types=1);


class Competences
{

    private  $id_competence;

    private  $nom;

    private  $detail;



    /**
     * Default constructor
     */
    public function __construct($id_competence,$nom,$detail)
    {
        $this->_id_competence=$id_competence;
        $this->_nom=$nom;
        $this->_detail=$detail
    }


    public function getid_competences(){ return $this->_id_competence;}
    public function getnom(){ return $this->_nom;}
    public function getdetail(){ return $this->_detail;}


    public function setid_competences(int $newid_competence)
    { 
        $this->_id_competences=$newid_competence;
    }
    public function setnom(string $newnom)
    { 
        $this->_nom=$newnom;
    }
    public function setdetail(string $newdetail)
    { 
        $this->_detail=$newdetails;
    }
    

    

}
