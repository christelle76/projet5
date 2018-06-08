<?php ob_start(); ?>
<div class="titrePage">
    <h1>Forum</h1>
</div>

<div id="posts">
    <p><i class="fas fa-angle-double-right"></i> <a href="index.php?page=forum">Forum</a> / <a href="index.php?page=forum&categorie=<?= $categorieId;?>"><?= $categorieName;?></a> / <?= $topicName;?></p>
    <div class="post">
        <table>
        <?php foreach($posts as $post):?>
            <tr>
                <td class="postedBy">
                    <h2><span class="pink"><i class="far fa-user"></i> <?= $post['post_by'];?></span></h2>
                    <img src="Contenu/Images/users/<?= $post['post_by'];?>.png" alt="avatar">
                    <p>a posté le<br/>
                    <p><?php $date = date_create($post['post_date']); echo date_format($date,'d-m-Y \à H:i:s');?><br/></p>
                </td>
                <td class="messagePosted"><?= $post['post_content']; ?></td>
            </tr>
        <?php endforeach;?>
        </table>
    </div>
</div>  
    
    <div id="ajoutPost">
        <p><b>Connectez-vous pour pouvoir poster un message :</b></p>
        <form action="index.php" method="post">
        <input type="text" name="user_id" placeholder="Votre identifiant"/>
        <input type="password" name="user_password" placeholder="Votre mot de passe"/>
        <input type="submit" class="submit" value="Se connecter" name="connect"></input>
        <form>
    </div>

</div>
<?php $contenu = ob_get_clean(); ?>