<?php
include("header.php");
include("datasource.php");
include("lib/functions.php");


//print_r($_GET);//affiche le contenu du tableau associatif
if(isset($_GET["id"])){
  $id =$_GET['id'];
  $trainee=traineeId($id);
  //var_dump($trainee);
  if ($trainee){//si trainee n'est ni NULL ni False ni chaine vide
    echo traineeDetails($trainee);
  }else{
    echo "Stagiaire inconnu";
  }
}else {
  echo "Paramètre id manquant";
}
?>


<?php include("sidebar.php")?>


<?php
include ("footer.php");
?>
