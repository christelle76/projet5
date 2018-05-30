<?php ob_start(); ?>

<div class="titrePage">
    <h1>Formulaire de contact</h1>
</div>

<div id="contenu">
    <form method="post" action="index.php">
        <input type="text" placeholder="Sujet du message" name="objectContact"/> <br/>
        <textarea name="messageContact"></textarea><br/>
        <input type="submit" name="valider" value="Envoyer"/>

    </form>
</div>

<?php $contenu = ob_get_clean(); ?>