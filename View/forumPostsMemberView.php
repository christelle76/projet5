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
    <h3>Ajouter un nouveau post :</h3>
    <form method="post" name="addPost" action="index.php?page=forum&topic=<?= $_GET['topic'];?>">
        <input type="text" id="content" name="content" placeholder="Ecrivez ici votre message">
        <input type="hidden" name="topic" value="<?= $_GET['topic'];?>">
        <input type="hidden" name="user" value="<?= $_SESSION['username'];?>"><br/><br/>
        <input type="submit" class="submit" value="Envoyer">
    </form>
</div>


<?php $contenu = ob_get_clean(); ?>