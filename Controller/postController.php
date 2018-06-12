<?php

require_once('Modele\modele.php');
require_once('Modele\forum.php');
require_once('Modele\users.php');
require_once('Modele\contact.php');
require_once('loginController.php');


class PostController extends Modele {

    function __construct() {
        $this->bdd = new Modele();
    }

    function testAddPost() {
        if(isset($_POST['content'])) {
            $addPost = new Forum;
            $addPost->addPost($_POST['content'], date("Y-m-d H:i:s"), $_POST['topic'], $_POST['user']);
        } 
    }

    function testFormContact() {
        if(isset($_POST['messageContact']) && $_POST['objectContact']) {
            $sendMessage = new Contact();
            $sendMessage->sendMessage($_POST['objectContact'], $_POST['messageContact'], $_SESSION['username']);
        } 
    }

    function testDisconnect() {
        if(isset($_POST['disconnect'])) {
            unset($_SESSION['username']);
        } 
        // $loginController = new LoginController();
        // $loginController->isConnected();
    }

    function connexionTest() {
        if(isset($_POST['user_id']) && isset($_POST['user_password'])) {
            $loginController = new LoginController();
            $loginController->connexionTest($_POST['user_id'], $_POST['user_password']);
        } 
    }

    function testCategorieExist($post){
        $categorie = new Forum;
        $result = $categorie->getCategoriesWithPOST($post);
        return $result;
    }

    function testTopicExist($post){
        $topic = new Forum;
        $result = $topic->getTopicsWithPOST($post);
        return $result;
    }

}