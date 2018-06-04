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
    
    function countNumberTopics($cat_id){
        $select = $this->bdd->getBdd()->prepare('SELECT * FROM avbf_categories AS cat, avbf_topics AS topic WHERE cat.' . $cat_id . ' = topic.topic_cat');
        $select->execute(array($cat_id));
        $rowCount = $select->rowCount();
        return $rowCount;
    }

    function getCategorieName($topic_id){
        $categorieId = $this->bdd->getBdd()->prepare("SELECT * FROM avbf_topics WHERE topic_id =?");         
        $categorieId->execute(array($topic_id));         
        $c = $categorieId->fetch();
        $categorieName = $this->bdd->getBdd()->query("SELECT * FROM avbf_categories WHERE cat_id = " . $c['topic_cat'] . "")->fetch();
        return $categorieName['cat_name'];
    }

    function getCategorieNameWithCategorieId($cat_id){
        $categorieName = $this->bdd->getBdd()->prepare("SELECT * FROM avbf_categories WHERE cat_id =?");
        $categorieName->execute(array($cat_id));
        $catName = $categorieName->fetch();
        return $catName['cat_name'];
    }

    function getCategorieId($topic_id){
        $categorieId = $this->bdd->getBdd()->prepare("SELECT * FROM avbf_topics WHERE topic_id =?");
        $categorieId->execute(array($topic_id));
        $catId = $categorieId->fetch();
        return $catId['topic_cat'];
    }

    function getTopics($id_categories){
        $topics = $this->bdd->getBdd()->prepare('SELECT * FROM avbf_topics WHERE topic_cat=:id_categories');
        $topics->execute(array('id_categories'=>$id_categories));
        return $topics;
    }

    function getTopicName($topic_id) {
        $topicName = $this->bdd->getBdd()->prepare("SELECT * FROM avbf_topics WHERE topic_id =?");
        $topicName->execute(array($topic_id));
        $topName = $topicName->fetch();
        return $topName['topic_subject'];
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

    function addPost($content, $date, $topic, $by) {
        $addPost = $this->bdd->getBdd()->prepare("INSERT INTO avbf_posts(post_content, post_date, post_topic, post_by) VALUES (:post_content, :post_date, :post_topic, :post_by)");
        $addPost->execute(array(
            'post_content'=>$content,
            'post_date'=>$date,
            'post_topic'=>$topic,
            'post_by'=>$by,
        ));
    }
}
?>