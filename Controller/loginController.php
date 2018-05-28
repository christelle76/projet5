<?php

require_once('Modele\modele.php');
require_once('Modele\forum.php');
require_once('Modele\adherents.php');

class LoginController extends Modele {

    function __construct() {
        $this->bdd = new Modele();
    }

    function isConnected() {
        if ($_SESSION['id']) {
            return true;
        } else {
            return false;
        }
    }

    function isPasswordCorrect($id, $password){
        
    }

    function clearSession() {
        unset($_SESSION['id']);
    }

}