<?php

declare(strict_types=1);


class Options
{

    private  $id_options;
    private  $options;


    /**
     * Default constructor
     */
    private function __construct($id_options,$options)
    {
        $this->_id_options=$id_options;
        $this->_options=$options;
    }

    public function getid_options(){ return $this->_id_options;}
    public function getoptions(){ return $this->_options;}

    public function setid_options(int $newid_options)
    { 
        $this->_id_options=$newid_options;
    }
    public function setoptions(string $newoptions)
    { 
        $this->_options=$newoptions;
    }

}

