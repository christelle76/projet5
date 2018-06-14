<?php

require_once './Autoloader.php';
Autoloader::register();

class Adherents extends Modele {

    protected $bdd;
            
    function __construct() {
        $this->bdd = new Modele();
    }

    function getAdherents(){
        $cars = $this->bdd->getBdd()->query('SELECT * FROM avbf_adherents');
        return $cars;
    }

}
?>