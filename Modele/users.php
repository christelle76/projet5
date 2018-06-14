<?php

require_once './Autoloader.php';
Autoloader::register();

class Users extends Modele {

    protected $bdd;
            
    function __construct() {
        $this->bdd = new Modele();
    }

    function getUser($username){
        $user = $this->bdd->getBdd()->query("SELECT * FROM avbf_user WHERE user_pseudo='" . $username . "'")->fetch();
        //$user->execute(array('id'=>$username));
        return $user;
    }

    function getUserWithId($user_id) {
        $user = $this->bdd->getBdd()->query("SELECT * FROM avbf_user WHERE user_pseudo='" . $username . "'")->fetch();
        //$user->execute(array('id'=>$username));
        return $user;
    }

}
?>