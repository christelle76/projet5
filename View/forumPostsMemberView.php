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
                        <h1><?= $_SESSION['id'];?></h1>
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
        <h2>Ajouter un nouveau post :</h2>
        <form method="post" name="addPost" action="index.php?page=forum&topic=<?= $_GET['topic'];?>">
            <input type="text" name="content" placeholder="Ecrivez ici votre message">
            <input type="hidden" name="topic" value="<?= $_GET['topic'];?>">
            <input type="hidden" name="user" value="<?= $_SESSION['id'];?>"><br/>
            <input type="submit" value="Envoyer">
        </form>
    </div>

</div>
<?php $contenu = ob_get_clean(); ?>