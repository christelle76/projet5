<?php

class Modele {

    protected $bdd;

    function __contruct() {
        
    }

    public function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=projet5;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
    //$bdd = new PDO('mysql:host=db715834695.db.1and1.com;dbname=db715834695;charset=utf8', 'dbo715834695', 'Lovehina76380@');
    return $bdd;
    }
}