<?php

$db= new PDO('mysql:host=localhost;dbname=quizz;charset=utf8','root','Zanahary');
//$db est un objet de type PDO, il contient des propriétés et
//des methodes qui permettent d'intéragir avec la Database
//var_dump($db);

$sql = 'SELECT * FROM stagiaire';
//$db -> query($sql);

//ligne sql transformée en tableau PHP assoc et num
foreach($db->query($sql, PDO::FETCH_ASSOC) as $element){
  $nom=$element['nom'];
  $prenom=$element['prenom'];
  echo '<p>'.ucfirst($nom).' '.ucfirst($prenom).'</p>';
  //echo '<p>'.$element[1].'</p>';
  //var_dump($element);
}


?>
