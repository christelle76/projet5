<?php ob_start(); ?>
<div id="forum">
    <table>
        <tr>
            <td class="Topic"><b>Topics</b></td>
            <td><b>Nb Posts</b></td>
            <td><b>Posté le:</b></td>
        </tr>
        <?php foreach($topics as $topic):?>
            <tr>
                <td><h3><a href="http://localhost/projet5/index.php?page=forum&topic=<?= $topic['topic_id'];?>"><?= $topic['topic_subject'];?></a></h3></td>
                <td>X</td>
                <td><?= $topic['topic_date'];?></td>
            <tr>
        <?php endforeach;?>
    </table>
</div>
<?php $contenu = ob_get_clean(); ?>