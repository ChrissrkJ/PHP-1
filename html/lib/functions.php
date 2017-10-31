<?php

//met 1er lettre de la chaine en K
function firstCap($str){
  $firstString = $str[0];
  $reste = substr($str, 1);
  $cap = strtoupper($firstString);
  $low = strtolower($reste);
  return $cap . $low;
}
//retourne la dernière note
function lastMark($marks){
  $nb_marks = sizeof($marks);
  //renvoie dernière note su le tableau $note est pas vide
  if (sizeof($marks) == 0) {
    return AUCUNE_NOTE_MSG;
  //sinon on affiche la dernière note
  } else {
    return $marks[$nb_marks-1];
  }
}
// retourne la moyenne

function average($marks, $precision) {
  $nb_marks = sizeof($marks);//marks = tableau note
  if($nb_marks == 0) return AUCUNE_NOTE_MSG;
  if ($nb_marks == 1) return $marks[0];
  $sum = 0;
  foreach ($marks as $mark) {
  // équivalent : $sum
  $sum += $mark;
  }
  return round($sum /$nb_marks, $precision);

}
//renvoie les détails du stagiaire
function traineeDetails($stagiaire) {
  $output = '';
  $output .= '<div class="col-md-9">';
  $output .= '<h2>'.firstCap($stagiaire["nom"]).'</h2>';
  $output .= '<img src="'.ASSETS_PATH.'img/totem/' . $stagiaire['totem'] . '" alt=""/>';
  $output .= '</div>';
  return $output;
}


//@IN : liste des stagiaires
//@OUT: stagiaires ayant la meilleure moyene
// function tri($stagiaires){
//   $first= average($stagiaires[0]['notes',2]);
//   return $first;
// };


//function pour login.php : vérif nom/mdp
//@IN: nom et password ou un tableau ou POST
//@OUT: booléen true/false
function verifIdentity($info,$stagiaires){//IN: la superglobale POST
//IN: datasource :source de donnée dans laquelle on effectuera la recherche.
//OUT: bool
  $found=false;
  foreach($stagiaires as $element){
    if(($element["nom"]==$info["nom"]) && ($element["password"]==$info["password"])){
      $found = true;
      break;
    }
  return $found;
  }
}
?>
