<?php

require_once('Modele\modele.php');
require_once('Modele\forum.php');
require_once('Modele\adherents.php');

class MemberController extends Modele {

    function __construct() {
        $this->bdd = new Modele();
    }

    function accueil() {
        require_once('View\homeView.php');
        require 'View\memberTemplate.php';
    }

    function adherents() {
        $this->adherents = new Adherents();
        $cars = $this->adherents->getAdherents();
        require_once('View\adherentsView.php');
        require 'View\memberTemplate.php';
    }

    function evenements() {
        require_once('View\evenementsView.php');
        require 'View\memberTemplate.php';
    }

    function contact() {
        require_once('View\contactView.php');
        require 'View\memberTemplate.php';
    }

    function forum_categories() {
        $this->forum = new Forum();
        $categories = $this->forum->getCategories();
        require_once('View\forumCategoriesView.php');
        require 'View\memberTemplate.php';
    }

    function forum_topics($id) {
        $this->forum = new Forum();
        $topics = $this->forum->getTopics($id);
        require_once('View\forumTopicsView.php');
        require 'View\memberTemplate.php';
    }

    function forum_posts_member($id) {
        $this->forum = new Forum();
        $posts = $this->forum->getPosts($id);
        require_once('View\forumPostsMemberView.php');
        require 'View\memberTemplate.php';
    }
    
}