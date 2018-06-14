<?php

require_once './Autoloader.php';
Autoloader::register();

class Forum extends Modele {

    protected $bdd;
            
    function __construct() {
        $this->bdd = new Modele();
    }

    function getCategories(){
        $categories = $this->bdd->getBdd()->query('SELECT * FROM avbf_categories'); 
        return $categories;
    }

    function getCategoriesWithPOST($post){
        $categorie = $this->bdd->getBdd()->prepare('SELECT * FROM avbf_categories WHERE cat_id=?'); 
        $categorie->execute(array($post));
        $result = $categorie->fetchAll();
        return $result;
    }

    function getTopicsWithPOST($post){
        $topic = $this->bdd->getBdd()->prepare('SELECT * FROM avbf_topics WHERE topic_id=?'); 
        $topic->execute(array($post));
        $result = $topic->fetchAll();
        return $result;
    }
    
    function getNumberTopics(){
        $numberTopics = $this->bdd->getBdd()->query("SELECT topic_cat, count(*) as nb_post_by_cat FROM avbf_topics GROUP BY topic_cat")->fetchAll();
        return $numberTopics;
    }

    function getNumberPosts() {
        $numberPosts = $this->bdd->getBdd()->query("SELECT post_topic, count(*) as nb_post_by_topic FROM avbf_posts GROUP BY post_topic")->fetchAll();
        return $numberPosts;
    }

    function getNumberTopicsWithCatId($cat_id){
        $select = $this->bdd->getBdd()->prepare("SELECT * FROM avbf_topics WHERE topic_cat=?");
        $select->execute(array($cat_id));
        $numberTopics = $select->rowCount();
        return $numberTopics;
    }

    function getNumberCategories() {
        $numberCategories = $this->getCategories()->rowCount();
        return $numberCategories;
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

    function getNumberPostsWithTopicId($topic_id){
        $select = $this->bdd->getBdd()->prepare("SELECT * FROM avbf_posts WHERE post_topic =?");
        $select->execute(array($topic_id));
        $numberPosts = $select->rowCount();
        return $numberPosts;
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