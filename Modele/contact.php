<?php

require_once "modele.php";

class Contact extends Modele {

    protected $bdd;
            
    function __construct() {
        $this->bdd = new Modele();
    }

    function sendMessage($subject, $message, $user){
        $sendMessage = $this->bdd->getBdd()->prepare("INSERT INTO avbf_contact(contact_object, contact_message, contact_user) VALUES (:contact_subject, :contact_message, :contact_user)");
        $sendMessage->execute(array(
            'contact_subject'=>$subject,
            'contact_message'=>$message,
            'contact_user'=>$user,
        ));
    }

}
?>