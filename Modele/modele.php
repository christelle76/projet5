<?php

class Modele {

    protected $bdd;

    function __contruct() {
        
    }

    public function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
    return $bdd;
    }
}