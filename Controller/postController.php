<?php

require_once('Modele\modele.php');
require_once('Modele\forum.php');
require_once('Modele\users.php');

class PostController extends Modele {

    function __construct() {
        $this->bdd = new Modele();
    }

    function testAddPost() {
        if(isset($_POST['addPost'])) {
            $addPost = new Forum;
            $addPost->addPost($_POST['topic'], $_POST['addPost']);
        } 
    }

    function testDisconnect() {
        if(isset($_POST['disconnect'])) {

        } 
    }

    function testConnect() {
        if(isset($_POST['connect'])) {

        } 
    }

}