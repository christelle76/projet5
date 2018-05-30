<?php

require_once('Modele\modele.php');
require_once('Modele\forum.php');
require_once('Modele\users.php');

class PostController extends Modele {

    function __construct() {
        $this->bdd = new Modele();
    }

    function testAddPost() {
        if(isset($_POST['content'])) {
            $addPost = new Forum;
            $addPost->addPost($_POST['content'], currentdate(), $_POST['topic'], $_POST['user']);
        } 
    }

    function testFormContact() {

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