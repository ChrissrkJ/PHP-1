<?php
include("routes.php");
$db= new PDO('mysql:host=localhost;dbname=quizz;charset=utf8','root','Zanahary');

if(isset($_GET['route'])){
$route = $_GET['route'];
//récupère les données passée en paramètre dans url

}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modules 2 : Qizz App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

  <body id="homepage">
    <h1>Mon super Quizz !</h1>

    <header class="container ">
      <nav>
        <ul class="nav nav-tabs ulMenu">
          <li><a href="?route=question/play" class="menu">Jouer</a></li>
          <li><a href="?route=question/list" class="menu">Liste des questions</a></li>
          <li><a href="?route=question/add" class="menu">Ajouter une question</a></li>
        </ul>
      </nav>
    </header>

    <div class="container">

      <h3>Module2</h3>
      <?php
      if (isset($route)) include($routes[$route]);
      //je vais chercher dans le tableau $routes la clé que tu as récupéré via url, qui est stocké dans $route.
       ?>


    <div>
  </body>
</html>
<!---Création d'une application quizz---->
