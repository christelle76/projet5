<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>AVBF</title>
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href="..\Contenu\CSS\style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="centered">
            <div id="title">Anciennes voitures des blanches falaises</div>
            <div id="underTitle">Association</div>
            <div id="logo"><img src="..\Contenu\Images\petitlogo.png" alt="vieille voiture"></div>
            <div id="menu">
                <ul>
                    <li class="menuItem"><a href="index.php">Accueil</a></li>
                    <li class="menuItem"><a href="index.php?page=adherents">Adhérents</a></li>
                    <li class="menuItem"><a href="index.php?page=evenements">Evenements</a></li>
                    <li class="menuItem"><a href="index.php?page=contact">Contact</a></li>
                    <li class="menuItem"><a href="index.php?page=forum">Forum</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div id="slider">
        <img src="..\Contenu\Images\slide1.jpg" alt="vieille voiture">
    </div>
    <div>
        <?php echo $contenu; ?>
    </div>    
    <footer>
        <div class="centered">
            <div id="footerContent">
                <div id="leftSideFooter">

                </div>
                <div id="rightSideFooter">

                </div>
            </div>
        </div>
    </footer>
</body>
