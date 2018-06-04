<?php ob_start(); ?>

<div class="titrePage">
    <h1>Formulaire de contact</h1>
</div>

<div id="contenu">
    <form method="post" action="index.php?page=contact">
        <input type="text" placeholder="Sujet du message" id="sujetContact" name="objectContact"/> <br/><br/>
        <textarea name="messageContact" id="messageContact"></textarea><br/>
        <input type="submit" class="submit" name="valider" value="Envoyer"/>

    </form>
</div>

<?php $contenu = ob_get_clean(); ?>