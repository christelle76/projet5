<?php ob_start(); ?>
<div class="titrePage">
    <h1>Forum</h1>
</div>
<div id="posts">
    <p><a href="index.php?page=forum">Forum</a> / <a href="index.php?page=forum&categorie=<?= $categorieId;?>"><?= $categorieName;?></a> / <?= $topicName;?></p>
    <?php foreach($posts as $post):?>
        <div class="post">
            <table>
                <tr>
                    <td class="postedBy">
                        <h1><?= $post['post_by'];?></h1>
                        <img src="Contenu/Images/users/avatar-1.png" alt="avatar">
                        <p>a posté le</p>
                        <p><?= $post['post_date'];?></p>
                    </td>
                    <td class="messagePosted"><?= $post['post_content']; ?></td>
                </tr>
            </table>
        </div>
    <?php endforeach;?>
    
    <div id="ajoutPost">
        <p><b>Connectez-vous pour pouvoir poster un message :</b></p>
        <form action="index.php" method="post">
        <input type="text" name="user_id" placeholder="Votre identifiant"/>
        <input type="password" name="user_password" placeholder="Votre mot de passe"/>
        <input type="submit" value="Se connecter" name="connect"></input>
        <form>
    </div>

</div>
<?php $contenu = ob_get_clean(); ?>