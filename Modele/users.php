<?php

require_once "modele.php";

class Users extends Modele {

    protected $bdd;
            
    function __construct() {
        $this->bdd = new Modele();
    }

    function getUser($id){
        $user = $this->bdd->getBdd()->query('SELECT * FROM avbf_users WHERE');
        return $user;
    }

}
?>