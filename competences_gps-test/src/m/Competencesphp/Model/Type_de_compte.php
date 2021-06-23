<?php

declare(strict_types=1);


class Type_de_compte
{

    private  $id_type_compte;

    private  $type_compte;


    /**
     * Default constructor
     */
    public function __construct($id_type_compte,$type_compte)
    {
        $this->_id_type_compte=$id_type_compte;
        $this->_type_compte=$type_compte;
    }

    public function getid_type_compte(){ return $this->_id_type_compte;}
    public function gettype_compte(){ return $this->_type_compte;}


    public function setid_type_compte(int $newid_typecpt)
    { 
        $this->_id_type_compte=$newid_typecpt;
    }
    public function settype_compte(string $newtype_compte)
    { 
        $this->_type_compte=$newtype_compte;
    }





}
