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
        require_once('View\contactMemberView.php');
        require 'View\memberTemplate.php';
    }

    function forum_categories() {
        $this->forum = new Forum();
        $categories = $this->forum->getCategories()->fetchAll();
        $NumberCatMax = $this->forum->getNumberTopics();
        
        $newArray = array();

        foreach($NumberCatMax as $data) {
            $newArray[$data['topic_cat']] = $data['nb_post_by_cat'] ;
        }

        /*for($i = 0; $i < $NumberCatMax; $i++){
            $newArray[$i]['cat_id'] = $categories[$i]['cat_id'];
            $newArray[$i]['cat_name'] = $categories[$i]['cat_name'];
            $newArray[$i]['cat_description'] = $categories[$i]['cat_description'];
            $newArray[$i]['nb_topics'] = $this->forum->getNumberTopicsWithCatId($i);
        }*/

        require_once('View\forumCategoriesView.php');
        require 'View\memberTemplate.php';
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
        require 'View\memberTemplate.php';
    }

    function forum_posts_member($id) {
        $this->forum = new Forum();
        
        $categorieId = $this->forum->getCategorieId($id);
        $categorieName = $this->forum->getCategorieName($id);
        $topicName = $this->forum->getTopicName($id);
        $posts = $this->forum->getPosts($id);
        require_once('View\forumPostsMemberView.php');
        require 'View\memberTemplate.php';
    }

    function error() {
        require_once('View\errorView.php');
        require 'View\memberTemplate.php';
    }
    
}