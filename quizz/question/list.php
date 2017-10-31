<?php
//1-préparation de la requête:
$query = $db -> prepare('SELECT * FROM question ORDER BY id DESC');

//2-exécuter la requête :
$query->execute();

//3-récupération des données (fetch):
$questions= $query->fetchAll(PDO::FETCH_OBJ);
//var_dump($questions);
 ?>

<h2>Questions :</h2>
<div class="jumbotron listQuest">
  <table class="table">
    <thead>
    <tr>
      <th scope="col">Intitulé</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Niveau</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    <!-- variante syntaxique du FOREACH-->
    <?php foreach($questions as $element):?>
      <tr>
        <td><?= $element->title ?></td>
        <td><?= $element->category ?></td>
        <td><?= $element->level ?></td>
        <td>
          <a href="?route=question/edit&id=<?=$element->id?>" class="btn btn-primary btn-xs">Modifier</a>
          <!-- Supprimer va nous renvoyer sur une page chargée de supprimer l'élément identifier dans le paramètre URL -->
          <a href="?route=question/delete&id=<?=$element->id?>" class="btn btn-danger btn-xs">Supprimer</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>

  </table>

</div>
