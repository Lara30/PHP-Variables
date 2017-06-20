<?php
session_start();
$login=$_POST['login'];
$password=$_POST['password'];
setcookie('login', $login);
setcookie('password',$password);
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
<h2>Modification du contenu du cookie</h2>
<p>
Tu as modifié ton login : <?php echo $_COOKIE['login'];?><br/> et ton mot de passe est : <?php echo $_COOKIE['password'];?>
</p>

<?php
setcookie('login','nadine');
setcookie('password','essai');
?>

  </body>
  </html>
