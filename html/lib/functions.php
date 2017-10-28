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
  $output .= '<div class="stagiaire">';
  $output .= '<h2>'.$stagiaire['nom'].'</h2>';
  $output .= '<img src="'.ASSETS_PATH.'img/totem/' . $stagiaire['totem'] . '" alt=""/>';
  $output .= '</div>';
  return $output;
}





?>
