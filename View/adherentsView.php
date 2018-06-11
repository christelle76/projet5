<?php ob_start(); ?>

<div class="titrePage">
    <h1>Nos adhérents</h1>
</div>

<div id="listeAdherents">
    <?php foreach($cars as $car):?>
        <div class="adherent">
            <h2><?= $car['car'];?></h1>
            <p><?= $car['year'];?></p>
            <div class="img"><img src="Contenu/Images/adherents/<?= $car['image'];?>"></div> 
        </div>
    <?php endforeach; ?>
</div>

<?php $contenu = ob_get_clean(); ?>