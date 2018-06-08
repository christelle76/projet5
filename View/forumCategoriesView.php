<?php ob_start(); ?>
<div class="titrePage">
    <h1>Forum</h1>
</div>

<div id="forum">
    <table>
        <tr>
            <td class="colonneCategorie"><b>Catégories</b></td>
            <td class="colonneNbTopics"><b>Nb Topics</b></td>
        </tr>
        <?php foreach($categories as $categorie):?>
            <tr>
                <td class="colonneCategorie">
                    <h2><a href="http://localhost/projet5/index.php?page=forum&categorie=<?= $categorie['cat_id'];?>"><?= $categorie['cat_name'];?></a></h2>
                    <p><i class="fas fa-angle-double-right"></i> <?= $categorie['cat_description'];?></p>
                </td>
                <td class="colonneNbTopics"><?php if(array_key_exists($categorie['cat_id'],$newArray))
                {echo $newArray[$categorie['cat_id']];
                } else {echo  "0";}?></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>
<?php $contenu = ob_get_clean(); ?>