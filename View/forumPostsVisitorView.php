<?php ob_start(); ?>
<div id="posts">
    <?php foreach($posts as $post):?>
        <div class="post">
            <table>
                <tr>
                    <td class="postedBy">
                        <h1><?= $_SESSION['id'];?></h1>
                        <img src="Contenu/Images/users/avatar-1.png" alt="avatar">
                        <p><?= $post['post_date'];?></p>
                    </td>
                    <td class="messagePosted"><?= $post['post_content']; ?></td>
                </tr>
            </table>
        </div>
    <?php endforeach;?>
</div>
<?php $contenu = ob_get_clean(); ?>