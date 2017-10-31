<?php
include("header.php");
include("datasource.php");
include("lib/functions.php");
?>

<div class="col-md-9 ">
<?php

if(isset($_POST["nom"]) && isset($_POST["password"])){
  $nom =$_POST['nom'];
  $traineeName=traineeName($nom);
  $mdp =$_POST['password'];
  $traineeMdp=traineeMdp($mdp);
  //var_dump($trainee);
  if ($traineeName && $traineeMdp){//si trainee n'est ni NULL ni False ni chaine vide
    echo "<h1>Bonjour ". $_POST["nom"]." !</h1>";
    echo traineeDetails($traineeName);
  }else{
    echo "<h1>Stagiaire inconnu</h1>";
  }
}else {
  echo "<h1>Error de connexion</h1>";
}
 ?>





</div>
<?php include("sidebar.php")?>

<?php
include ("footer.php");
?>
