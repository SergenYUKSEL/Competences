<?php

declare(strict_types=1);


class Situation
{

    private  $id;

    private  $nom;

    private  $date_debut;

    private  $details;

    private  $date_creation;

    private  $duree;

    private  $type_duree;





    /**
     * Default constructor
     */
    public function __construct($id,$nom,$date_debut,$details,$date_creation,$duree,$type_duree)
    {
        $this->_id=$id;
        $this->_nom=$nom;
        $this->_date_debut=$date_debut;
        $this->_details=$details;
        $this->_date_creation=$date_creation;
        $this->_duree=$duree;
        $this->_type_duree=$type_duree;
    }


    public function getid(){ return $this->_id;}
    public function getnom(){ return $this->_nom;}
    public function getdate_debut(){ return $this->_date_debut;}
    public function getdetails(){ return $this->_details;}
    public function getdate_creation(){ return $this->_date_creation;}
    public function getduree(){ return $this->_duree;}
    public function gettype_duree(){ return $this->_type_duree;}



    public function setid(int $newid)
    { 
        $this->_id=$newid;
    }
    public function setnom(string $newnom)
    { 
        $this->_nom=$newnom;
    }
    public function setdate_debut(string $newdate_debut)
    { 
        $this->_date_debut=$newdate_debut;
    }
    public function setdetails(string $newdetails)
    { 
        $this->_details=$newdetails;
    }
    public function setdate_creation(string $newcreation)
    { 
        $this->_duree=$newduree;
    }
    public function setduree(string $newduree)
    { 
        $this->_duree=$newduree;
    }
    public function settype_duree(string $newtype_duree)
    { 
        $this->_type_duree=$newtype_duree;
    }
    
    
}
