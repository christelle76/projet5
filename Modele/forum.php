<?php

require_once "modele.php";

class Forum extends Modele {

    protected $bdd;
            
    function __construct() {
        $this->bdd = new Modele();
    }

    function getCategories(){
        $categories = $this->bdd->getBdd()->query('SELECT * FROM avbf_categories');
        return $categories;
    }

    function getTopics($id_categories){
        $topics = $this->bdd->getBdd()->prepare('SELECT * FROM avbf_topics WHERE topic_cat=:id_categories');
        $topics->execute(array('id_categories'=>$id_categories));
        return $topics;
    }

    function getPosts($id_topics){
        $posts = $this->bdd->getBdd()->prepare('SELECT * FROM avbf_posts WHERE post_topic=:id_topics');
        $posts->execute(array('id_topics'=>$id_topics));
        return $posts;
    }

    function countTopics($id_categories) {
        $numberTopic = $this->bdd->getBdd()->prepare('SELECT * FROM avbf_topics WHERE topic_cat=:id_categories');
        $numberTopic->execute(array('id_topics'=>$id_categories))->rowCount();
        return $numberTopic;
    }

    function addPost($topic, $post) {
        $post = $this->bdd->getBdd()->prepare('SELECT * FROM avbf_posts WHERE post_topic= :topic, post_content= :post');
        $post->execute(array('post'=>$post, 'topic'=>$topic));
    }
}
?>