<?php

require_once './Autoloader.php';
Autoloader::register();

class LoginController extends Modele {

    function __construct() {
        $this->bdd = new Modele();
    }

    function isConnected() {
        if (isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }

    function clearSession() {
        unset($_SESSION['username']);
    }

    function hashPassword($password) {
        $userPasswordHashed = md5(md5($password));
        return $userPasswordHashed;
    }

    function connexionSucced() {
        header("Location: index.php");
        exit();
    }

    function connexionTest($username, $userPassword) {
        $users = new Users();
        $user = $users->getUser($username);

        $isPasswordCorrect = ($this->hashPassword($userPassword) == $user['user_password']);
        
        require_once('Controller\memberController.php');
        require_once('Controller\visitorController.php');

        if($isPasswordCorrect){
            $_SESSION['username'] = $username;
            $this->connexionSucced();
        } else {
            $visitorController = new visitorController();
            $visitorController->accueil(); 
        }
   
    }

}