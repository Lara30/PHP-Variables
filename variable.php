<?php
// <!-- on démarre la session avant d'écrire du code HTML -->
session_start();
// cette fonction ne marche que si l'on appelle avant tout code html
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CSource+Sans+Pro" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="style.css"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="./materialize/css/materialize/js/materialize.min.js"></script>

  <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><h1>EXERCICE PHP</h1></a>
      <!-- <a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">Menu</i></a> -->
      <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="variable.php">Vos infos</a></li>
        <li><a href="recup.php">Vos données</a></li>
        <li><a href="modifcontenu.php">Pour modifier</a></li>
      </ul> -->
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="variable.php">Vos infos</a></li>
        <li class="tab"><a href="recup.php">Vos données</a></li>
        <li class="tab"><a href="modifcontenu.php">Pour modifier</a></li>
      </ul>
    </div>
  </nav>
 </head>

 <body>
   <h2>Informations </h2>
<p>
Bienvenue <?php echo $_SESSION['prenom'].'  '.$_SESSION['nom'];?>!<br/>
Votre âge : <?php echo $_SESSION['age'];?> ans<br/> <br/>
</p>

<!-- <h2>A compléter </h2>
  <form method="POST" action="recup.php">
    <label for="login">Votre login </label>
      <input id="login" type="text" name="login" value=""/><br/><br/>
    <label for="password">Votre mot de passe </label>
      <input id="password" type="text" name="password" value=""/><br/><br/>
    <button class="btn waves-effect waves-light" type="submit" name="action">
   <i class="material-icons right">Valider</i>
 </button>
 </form> -->

</body>
</html>
