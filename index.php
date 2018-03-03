<?php include_once('include/config.php') ?>
<!DOCTYPE html>
<html lang="nl">
<head>

  <!-- 
 .d88b.  db    db d8888b. d888888b d8b   db  d888b  d88888b d8b   db
.8P  Y8. 88    88 88  `8D   `88'   888o  88 88' Y8b 88'     888o  88
88    88 Y8    8P 88   88    88    88V8o 88 88      88ooooo 88V8o 88
88    88 `8b  d8' 88   88    88    88 V8o88 88  ooo 88~~~~~ 88 V8o88
`8b  d8'  `8bd8'  88  .8D   .88.   88  V888 88. ~8~ 88.     88  V888
 `Y88P'     YP    Y8888D' Y888888P VP   V8P  Y888P  Y88888P VP   V8P
                                                                    
                                                                     -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>ovdingen</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
</head>
<body>
  
<?php include_once('nav.php') ?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text">Welkom bij ovdingen.nl</h1>
        <div class="row center">
          <h5 class="header col s12 light">Voor al het openbaar vervoer in Nederland</h5>
        </div>
        <div class="row center">
          <i class="material-icons">train</i>
          <i class="material-icons">directions_bus</i>
          <i class="material-icons">tram</i>
          <i class="material-icons">directions_subway</i>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="achtergrond1.jpg" alt="virm" style="filter:grayscale(100%);"></div>
  </div>


  <div class="container">
    <div class="section">
      <h4 class="center">Projecten</h4>

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">train</i></h2>
            <h5 class="center">Arnu Viewer</h5>

            <!-- <p class="light">Tekst</p>

            <div class="center">
              <a class="waves-effect waves-light btn">button</a>
            </div> -->
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">map</i></h2>
            <h5 class="center">Trein Viewer</h5>

            <p class="light">Bekijk in realtime de locatie van de treinen in Nederland.</p>
            
            <div class="center">
              <a class="waves-effect waves-light btn" href="https://treinviewer.ovdingen.nl" target="blank">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">local_phone</i></h2>
            <h5 class="center">Telefoon Service</h5>

            <p class="light">(Even) geen internet op je (mobiele) telefoon? Bel naar de Telefoon Service en krijg direct de vertrektijden van uw halte.</p>
            <p class="light">Tijdelijk buiten gebruik. Excuses voor het ongemak.</p>
            
            <!-- <div class="center">
              <a class="waves-effect waves-light btn" href="telefoon.php">Bekijk</a>
            </div> -->
          </div>
        </div>

      </div>
      <p class="light center">Bekijk onze <a href="https://github.com/ovdingen" target="blank">github</a> voor de source-code en voortgang van onze projecten.</p>

    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact</h4>
          <div class="col s12">
          <p class="center-align light">Voor vragen over ons, kan je een mailtje sturen naar <a href="mailto:contact@ovdingen.nl" target="blank">contact@ovdingen.nl</a> of join onze discord server.</p>
          <p class="center-align light"><a class="btn-floating btn-large" href="https://github.com/ovdingen" target="blank"><i class="fab fa-github"></i></a> <a class="btn-floating btn-large" href="https://instagram.com/ovdingen" target="blank"><i class="fab fa-instagram"></i></a> <a class="btn-floating btn-large" href="https://discordapp.com/invite/FcMHsR" target="blank"><i class="fab fa-discord"></i></a>
            <h4>Instagram</h4>
            <?php include_once('instagram.php') ?>
          </div>
          <!-- <div class="hide-on-med-and-down">
            <div class="col s3">
            <iframe src="https://discordapp.com/widget?id=391999440212328448&theme=light" width="100%" height="300" allowtransparency="true" frameborder="0"></iframe>
            </div>
          </div> -->
        </div>
      </div>

    </div>
  </div>

<?php include_once('footer.php') ?>