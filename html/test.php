<?php
include("lib/functions.php");
ini_set('display_errors',1)//erreurs et notices affichées dans le navigateur


?>

<p>Paragraphe</p>
<?php
//php est unlangage à typage dynamique;

//type simple
$v ="bonjour";//string
echo $v;
echo firstCap($v);
echo gettype($v);

$v = 14;//type number : float, int etc ...
echo $v;
echo gettype($v);

$v = 14.7;//type number : float, int etc ...
echo $v;
echo gettype($v);

$v = true ; //bouléenne : permet des tests conditionnels (if ...)
echo$v;
echo gettype($v);

$v2 = 5 ;//NULL
echo gettype($v2);


//operationinteger:
$nb1 = 45;
$nb2 = 2;
$nb3 = "3";
echo $nb1 * $nb3;  //conversion implicite de nb3 en integer
//resultat 135

$str1 = "un tiens vaut mieux";
$str2 = " que deux tu l'auras";
echo "<h2>" . $str1 . " ". $str2 ."</h2>";



//type complexe

// TABLEAU A INDICE NUMERIQUE (commence à 0)
$tableau = [];
echo gettype($tableau);

$tableau2 = array();
echo gettype($tableau2);

$etudiants = ["étudiant 1", "étudiant 2", "étudiant 3"];
echo $etudiants[2];//etudiant 3
$etudiants[0] = "Samir"; // accès en écriture : mise à jour de l'élément 0 du tableau
echo $etudiants[0];

$mix = ["chaine", 45, false, NULL, $etudiants];
echo $mix[4][0]; // tableau a deux dimensions;

// TABLEAU ASSOCIATIF
$joueurs = array (
  "joueur1" => array (
    "nom" => "Messi",
    "prenom" => "Lionel",
    "maillot" => 10
    )
  );

  echo $joueurs["joueur1"]["prenom"];



  $jr1= array("prenom" => "Paolo", "nom"=>"Dybala", "maillot" => 10);
  $jr2= array("prenom" => "Gorgio", "nom"=>"Chiellini", "maillot" => 3);
  $jr3= array("prenom" => "Andrea", "nom"=>"Barzagli", "maillot" => 15);

  $juve = array($jr1, $jr2, $jr3);
// MISE A JOUR DU NUMERO DE MAILLOT
  $jr1["maillot"] = 21;
  $juve[0]["maillot"] = 21;//modifier aussi dans le tableau juve pour qu'il
  echo $jr1["maillot"];

//structure iterative
//Boucle for :
echo "<ul>";
for ($i = 0; $i< sizeof($juve);$i++){
  echo "<li>".$juve[$i]["prenom"]." ". $juve[$i]["nom"]."</li>";

}
echo "</ul>";

//boucle while : xavier pue de la gueule
echo "<select>";
$compteur = 0;
while($compteur < sizeof($juve)) {
  echo "<option>". $juve[$compteur]["maillot"]."</option>";
  $compteur++;
}
echo "</select>";

//boucle foreach
foreach($juve as $j){
  if ($j["maillot"] == 21) {
    echo "<p style='color:green'>". $j["nom"]." (meneur de jeu)"."</p>";
  }else {
    echo "<p>". $j["nom"]."</p>";
  }
}























 ?>
