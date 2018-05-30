<?php

require_once "modele.php";

class Contact extends Modele {

    protected $bdd;
            
    function __construct() {
        $this->bdd = new Modele();
    }

    function sendMessage($subject, $message, $user){
        $sendMessage = $this->bdd->getBdd()->query("INSERT INTO avbf_contact(contact_subject, contact_message, contact_user) VALUES (:contact_subject, :contact_message, :contact_user)");
        $addPost->execute(array(
            'post_content'=>$subject,
            'post_date'=>$message,
            'post_topic'=>$user,
        ));
    }

}
?>