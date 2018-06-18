<?php

require_once('Modele\modele.php');
require_once('Modele\forum.php');
require_once('Modele\adherents.php');

class VisitorController extends Modele {

    function __construct() {
        $this->bdd = new Modele();
    }

    function accueil() {
        require_once('View\homeView.php');
        require 'View\visitorTemplate.php';
    }

    function adherents() {
        $this->adherents = new Adherents();
        $cars = $this->adherents->getAdherents();
        require_once('View\adherentsView.php');
        require 'View\visitorTemplate.php';
    }

    function evenements() {
        require_once('View\evenementsView.php');
        require 'View\visitorTemplate.php';
    }

    function contact() {
        require_once('View\contactVisitorView.php');
        require 'View\visitorTemplate.php';
    }

    function forum_categories() {
        $this->forum = new Forum();
        $categories = $this->forum->getCategories()->fetchAll();
        $NumberCatMax = $this->forum->getNumberTopics();
        
        $newArray = array();

        foreach($NumberCatMax as $data) {
            $newArray[$data['topic_cat']] = $data['nb_post_by_cat'] ;
        }

        require_once('View\forumCategoriesView.php');
        require 'View\visitorTemplate.php';
    }

    function forum_topics($cat_id) {
        $this->forum = new Forum();
        $categorieName = $this->forum->getCategorieNameWithCategorieId($cat_id);
        $topics = $this->forum->getTopics($cat_id);
        $numberPosts = $this->forum->getNumberPosts();

        $newArray = array();

        foreach($numberPosts as $data) {
            $newArray[$data['post_topic']] = $data['nb_post_by_topic'] ;
        }
        
        require_once('View\forumTopicsView.php');
        require 'View\visitorTemplate.php';
    }

    function forum_posts_visitor($id) {
        $this->forum = new Forum();
        
        $categorieId = $this->forum->getCategorieId($id);
        $categorieName = $this->forum->getCategorieName($id);
        $topicName = $this->forum->getTopicName($id);
        $posts = $this->forum->getPosts($id);
        require_once('View\forumPostsVisitorView.php');
        require 'View\visitorTemplate.php';
    }

    function error() {
        require_once('View\errorView.php');
        require 'View\visitorTemplate.php';
    }
    
}