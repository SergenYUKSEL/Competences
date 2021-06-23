<?php
Function ConnectBdd () {
        try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=competences;charset=utf8', 'root', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        return $bdd;
    }
    catch (Exeption $e)
    {
            die('Erreur : ' .$e->getMessage());
    }
}

function requestBDD($bdd, $query){
    try
    {
    $rep = $bdd->query($query);
    
    return $rep;
    }
    catch (Exeption $e) {
        die('Erreur : ' .$e->getMessage());
    }
}