<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>AVBF</title>
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
  <link rel='stylesheet' href='Contenu/CSS/fullcalendar.css' />
  <script src='Contenu/Lib/jquery.min.js'></script>
    <script src='Contenu/Lib/moment.min.js'></script>
    <script src="Contenu/Script/locale/fr.js"></script>
    <script src='Contenu/Script/fullcalendar.js'></script>
    <script src='Contenu/Script/calendar.js'></script>
  <link href="Contenu\CSS\style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <div id="member">
           <p><form action="index.php" method="post">Connectez-vous:   <input type="text" name="user_id" placeholder="Votre identifiant"/> <input type="password" name="user_password" placeholder="Votre mot de passe"/><input type="submit" value="Se connecter" name="connect"></input><form></p>
        </div>
        <div class="centered">
            <div id="title">Anciennes voitures des blanches falaises</div>
            <div id="underTitle">Association</div>
            <div class="separator"><img src="Contenu/Images/separator.png" alt="vieille voiture"></div>
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
    <section id="slideContainer">
        <div id="slider1" class="mySlides">
            <img src="Contenu/Images/slide1.jpg" alt="vieille voiture">
        </div>
        <div id="slider2" class="mySlides">
            <img alt="tuto" src="Contenu/Images/slide2.jpg" alt="vieille voiture">        
        </div>
        <div id="logo">
            <img src="Contenu/Images/logoMoyen.png" alt="vieille voiture">
        </div>
    </div>
    <div class="centered">
        <div>
            <?php echo $contenu; ?>
        </div>    
    </div>
    <footer>
        <div class="centered">
            <table>
                <tr>
                    <td class="colonneFooter">
                        <h2>Siège</h2>
                        <p>1 Route de Barville</p>
                        <p>76450 CANY BARVILLE</p>
                        <br/>
                        <h2>Composition du Club</h2>
                        <p>Nombre d’adhérents : 65</p>
                        <p>Nombre de voitures : 170</p>
                        <p>Montant de la cotisation annuelle = 45 Euros</p>
                    </td>
                    <td class="colonneFooter">
                        <h2>Partenaires</h2>
                        <table>
                            <tr>
                                <td class="footerPartenaire"><img src="Contenu/Images/partenaires/partenaire1.jpg" alt="partenaire france bleu"></td>
                                <td class="footerPartenaire"><img src="Contenu/Images/partenaires/partenaire2.jpg" alt="partenaire ville cany barville"></td>
                            </tr>
                            <tr>
                                <td class="footerPartenaire"><img src="Contenu/Images/partenaires/partenaire3.jpg" alt="partenaire rouen expertise automobile"></td>
                                <td class="footerPartenaire"><img src="Contenu/Images/partenaires/partenaire4.jpg" alt="partenaire saucisson roches blanches"></td>
                            </tr>
                        </table>
                    </td>
                    <td class="colonneFooter">
                        <h2>Réseaux sociaux</h2>

                    </td>
                </tr>
            <table>
        </div>
    </footer>
    <script src="Contenu/Script/car.js"></script>
    <script src="Contenu/Script/slider.js"></script>
    <script src="Contenu/Script/main.js"></script>
</body>
