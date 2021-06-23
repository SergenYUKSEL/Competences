<?php

declare(strict_types=1);


class Utilisateur
{

    private  $id_EGNOM;

    private  $nom;

    private  $prenom;

    private  $mdp;

    private  $type_de_compte;

    private  $options;




    /**
     * Default constructor
     */
    public function __construct($id_EGNOM,$nom,$prenom,$mdp,$type_de_compte,$options)
  {
    $this->_id_EGNOM=$id_EGNOM;
    $this->_nom=$nom;
    $this->_nom=$prenom;
    $this->_mdp=$mdp;
    $this->_type_de_compte=$type_de_compte;
    $this->_options=$options;
  }


  public function getid(){ return $this->_id_EGNOM;}
  public function getnom(){ return $this->_nom;}
  public function getprenom(){ return $this->_prenom;}
  public function getmdp(){ return $this->_mdp;}
  public function gettype_de_compte(){ return $this->_type_de_compte;}
  public function getoptions(){ return $this->_options;}


  public function setid_EGNOM(string $newid_EGNOM)
  { 
    $this->_id_EGNOM=$newid_EGNOM;
  }
  public function setnom(string $newnom)
  { 
    $this->_nom=$newnom;
  }
  public function setprenom(string $newprenom)
  { 
    $this->_prenom=$newprenom;
  }
  public function setmdp(string $newmdp)
  { 
    $this->_mdp=$newmdp;
  }
  public function settype_de_compte(string $newtypecpt)
  { 
    $this->_type_de_compte=$newtypecpt;
  }
  public function setoptions(string $newoptions)
  { 
    $this->_options=$newoptions;
  }



  public function create_situation(Utilisateur $situationAcreer)
  {
    
  }


}
