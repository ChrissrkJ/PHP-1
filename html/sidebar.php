<?php
include_once('./lib/functions.php');
include_once('datasource.php');

 ?>


<div id="sidebar" class="col-md-3">
  <p class="top3">Top 3 des meilleurs stagiaires : </p>

    <?php
    $stagiaires =listTrainees();
    $averages=array();
    foreach ($stagiaires as $element) {
      $nom = firstCap($element["nom"]).' '. firstCap($element["prenom"]);
      $aver = average($element['notes'], 2);
      array_push($averages[$nom]=$aver);
      arsort($averages);
    };
    array_splice($averages,3);


    foreach($averages as $key =>$value){
      echo '<p>'.$key. ' (' .$value. '/20) </p><hr>';
    }
    ?>

</div>
