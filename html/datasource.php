<?php
//une fonction protège les données
function listTrainees() { //fonction qui retourne les données de stagiaires
  $trainees = array(
    array(
      "id"=> 1,
      "nom" => "abecassis",
      "prenom" => "stéphane",
      "totem"=>"stephane.jpg",
      "notes" =>[8,5,11],
      "password"=>"ab_step17",
    ),
    array(
      "id"=> 2,
      "nom" => "chauvet",
      "prenom" => "stevens",
      "totem"=>"stevens.jpg",
      "notes" =>[4, 20,20],
      "password"=>"ch_stev17",
    ),
    array(
      "id"=> 3,
      "nom" => "grivel",
      "prenom" => "sebastien",
      "totem"=>"seb.jpg",
      "notes" =>[10,10,10],
      "password"=>"gr_seba17",
    ),
    array(
      "id"=> 4,
      "nom" => "jafari",
      "prenom" => "sajjad",
      "totem"=>"sajjad.jpg",
      "notes" =>[17,15,19],
      "password"=>"ab_sajj17",
    ),
    array(
      "id"=> 5,
      "nom" => "françois",
      "prenom" => "pelé",
      "totem"=>"francois.jpg",
      "notes" =>[11,7,18],
      "password"=>"fr_pele17",
    ),
    array(
      "id"=> 6,
      "nom" => "abdel",
      "prenom" => "messaoudi",
      "totem"=>"abdel.jpg",
      "notes" =>[13,13,13],
      "password"=>"ab_mess17",
    ),
    array(
      "id"=> 7,
      "nom" => "léa",
      "prenom" => "rérolle",
      "totem"=>"lea.jpg",
      "notes" =>[20,16,18],
      "password"=>"le_rero17",
    ),
    array(
      "id"=> 8,
      "nom" => "xavier",
      "prenom" => "morreau",
      "totem"=>"xavier.jpg",
      "notes" =>[10,14,17],
      "password"=>"xa_more17",
    ),
    array(
      "id"=> 9,
      "nom" => "jessy",
      "prenom" => "vautour",
      "totem"=>"jessy.jpg",
      "notes" =>[19,13,12],
      "password"=>"je_vaut17",
    ),
    array(
      "id"=> 10,
      "nom" => "nadia",
      "prenom" => "poisson",
      "totem"=>"nadia.jpg",
      "notes" =>[14,16,10],
      "password"=>"na_pois17",
      )
  );
  return $trainees;
}

function traineeId($id) {
  //@IN integer
  //@OUT an array() || NULL
  $trainee = NULL;//valeur initiale
  foreach(listTrainees() as $element){
    if ($element["id"] == $id){
      $trainee = $element; //$element sera un tableau
      break; //sortie de boucle.
    }
  }
  return $trainee;
}
 ?>
