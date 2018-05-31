<?php ob_start(); ?>

<div class="titrePage">
    <h1>Formulaire de contact</h1>
</div>

<div id="contenu">
    <p>Afin de pouvoir envoyer un message à l'administration du site.<br/>
    Vous devez être membre.<br/>
    <br/>
    Merci de vous connecter.</p>

    <form action="index.php" method="post">
    <input type="text" name="user_id" placeholder="Votre identifiant"/>
    <input type="password" name="user_password" placeholder="Votre mot de passe"/>
    <input type="submit" class="submit" value="Se connecter" name="connect"></input>
    <form>
</div>

<?php $contenu = ob_get_clean(); ?>