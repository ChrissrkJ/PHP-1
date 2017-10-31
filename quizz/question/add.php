<?php
include('categories.php');
if(isset($_POST['submit'])){
  //var_dump($_POST);
  //1-validation des données
  $cond1 = $_POST['title']          != "";
  $cond2 = $_POST['category']       != "0";
  $cond3 = intval($_POST['level'])  != 0;
  //var_dump($cond3);

  if ($cond1 && $cond2 && $cond3){
    //toutes les conditions sont remplies
    //2-enregistrement des données en DB

    //2a-préparation de la requête :
    $query = $db->prepare(
      'INSERT INTO question(title, category, level) VALUES (:title, :category, :level)'
    );
    //2b execution du résulatat de la préparation
    $result = $query->execute(
      array(
      ':title'    => $_POST['title'],
      ':category' => $_POST['category'],
      ':level'    => intval($_POST['level']),//inval() convertie la valeur en entier
      )
    );
    //var_dump($result)
    if($result) {
      //echo "<p>Enregistrement réussi !</p>";
      header('location:?route=question/list'); //redirection après validation vers list de question
    }else{
      echo "<p>L'enregistrement a échoué.</p>";
    }
  }else {
    echo "<p>Renseignez correctement tous les champs</p>";
  }
}

 ?>

 <h2>Ajouter une question : </h2>
<form method="post">
  <div class="form-group">
    <label for="">Intitulé : </label>
    <input type="text" class="form-control addQuest" name="title" >
  </div>

  <div class="form-group select">
    <select class="custom-select" name="category" id="categ">
      <option value="0">Choisir une catégorie</option>
      <?php foreach($categories as $element): ?>
        <option><?=$element?></option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group select">
    <select class="custom-select" name="level" id="level">
      <option value="0">Choisir un niveau</option>
      <option value="1">Facile</option>
      <option value="2">Moyen</option>
      <option value="3">Difficile</option>
    </select>
  </div>

  <input type="submit" class="btn btn-primary" value="Enregistrer" name="submit">

</form>
