<?php ob_start(); ?>
<div class="titrePage">
    <h1>Forum</h1>
</div>

<div id="forum">
<p><i class="fas fa-angle-double-right"></i> <a href="index.php?page=forum">Forum</a> / <a href="index.php?page=forum&categorie=<?= $_GET['categorie'];?>"><?= $categorieName;?></a></p>
    <table>
        <tr>
            <td class="Topic"><b>Topics</b></td>
            <td class="NbTopic"><b>Nb Posts</b></td>
            <td class="TopicDate"><b>Posté le:</b></td>
        </tr>
        <?php foreach($topics as $topic):?>
            <tr>
                <td>
                    <h2><a href="http://localhost/projet5/index.php?page=forum&topic=<?= $topic['topic_id'];?>"><?= $topic['topic_subject'];?></a></h2>
                </td>
                <td class="NbTopic"> <?php if(array_key_exists($topic['topic_id'],$newArray))
                {echo $newArray[$topic['topic_id']];
                } else {echo  "0";}?> </td>
                <td class="TopicDate"> Le <?php $date = date_create($topic['topic_date']); echo date_format($date,'d-m-Y \à H:i:s');?></td>
            <tr>
        <?php endforeach;?>
    </table>
</div>
<?php $contenu = ob_get_clean(); ?>