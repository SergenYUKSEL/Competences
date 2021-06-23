<?php

declare(strict_types=1);


class Lien
{

    private  $id_liens;

    private  $URI;

    private  $details;


    /**
     * Default constructor
     */
    public function __construct($id_liens,$URI,$details)
    {
        $this->_id_liens=$id_liens;
        $this->_URI=$URI;
        $this->_details=$details;
    }

    public function getid_liens(){ return $this->_id_liens;}
    public function getURI(){ return $this->_URI;}
    public function getdetails(){ return $this->_details;}


    public function setid_liens(int $newid_liens)
    { 
        $this->_id_liens=$newid_liens;
    }
    public function setURI(string $newURI)
    { 
        $this->_URI=$newURI;
    }
    public function setdetails(string $newdetails)
    { 
        $this->_details=$newdetails;
    }





}
