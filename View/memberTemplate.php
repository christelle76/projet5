<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AVBF</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <link rel='stylesheet' href='Contenu/CSS/fullcalendar.css' />
  <link rel="stylesheet" href="Contenu/CSS/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
  <link href="Contenu/CSS/style.css" type="text/css" rel="stylesheet">

  <script src='Contenu/Lib/jquery.min.js'></script>
  <script src='Contenu/Lib/moment.min.js'></script>
  <script src="Contenu/Script/locale/fr.js"></script>
  <script src='Contenu/Script/fullcalendar.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/locale-all.js"></script>
  <script src="Contenu/Script/locales/bootstrap-datepicker.min.js"></script>
  <script src="Contenu/Script/locales/bootstrap-datepicker.fr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="Contenu/Script/script.js"></script>
  
</head>
<body>
    <header>
        <div id="member">
           <p> <form action="index.php" method="post">Bienvenue <?php echo $_SESSION['username'];?> -<input type="submit" class="submit "value="Se déconnecter" name="disconnect"></input></form></p>
        </div>
        <div class="centered">
            <div id="title">Anciennes voitures des blanches falaises</div>

            <?php require "separatorView.php"; ?><br/> 

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

    <?php require "sliderView.php"; ?>    

    <div class="centered">
        <div>
            <?php echo $contenu; ?>
        </div>    
    </div>

    <footer>
        <div class="centered">
            <?php require "footerView.php"; ?>  
        </div>
    </footer>
    
    <script src='Contenu/Script/calendar.js'></script>
    <script src="Contenu/Script/car.js"></script>
    <script src="Contenu/Script/slider.js"></script>
</body>