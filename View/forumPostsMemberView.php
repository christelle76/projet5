<?php ob_start(); ?>
<div class="titrePage">
    <h1>Forum</h1>
</div>
<div id="posts">
    <p><i class="fas fa-angle-double-right"></i> <a href="index.php?page=forum">Forum</a> / <a href="index.php?page=forum&categorie=<?= $categorieId;?>"><?= $categorieName;?></a> / <?= $topicName;?></p>
    <?php foreach($posts as $post):?>
        <div class="post">
            <table>
                <tr>
                    <td class="postedBy">
                        <h3><i class="far fa-user"></i> <?= $post['post_by'];?></h3>
                        <img src="Contenu/Images/users/avatar-1.png" alt="avatar">
                        <p>a posté le<br/>
                        <p><?= $post['post_date'];?><br/>
                        <b><i class="fas fa-trash-alt"></i>   Supprimer mon message</p>
                    </td>
                    <td class="messagePosted"><?= $post['post_content']; ?></td>
                </tr>
            </table>
        </div>
    <?php endforeach;?>
    
    <div id="ajoutPost">
        <h3>Ajouter un nouveau post :</h3>
        <form method="post" name="addPost" action="index.php?page=forum&topic=<?= $_GET['topic'];?>">
            <input type="text" id="content" name="content" placeholder="Ecrivez ici votre message">
            <input type="hidden" name="topic" value="<?= $_GET['topic'];?>">
            <input type="hidden" name="user" value="<?= $_SESSION['username'];?>"><br/><br/>
            <input type="submit" class="submit" value="Envoyer">
        </form>
    </div>

</div>
<?php $contenu = ob_get_clean(); ?>