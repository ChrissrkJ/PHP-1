<?php
  include('categories.php');
?>

<h2>Paramètrer mon quizz :</h2>

<div class="jumbotron playBlock">
  <div class="row">
    <select class="custom-select">
      <option selected>Catégories ... </option>
      <?php foreach($categories as $element): ?>
          <?php if($question->category==$element): ?>
            <option selected><?=$element?></option>
          <?php else: ?>
            <option><?=$element?></option>
          <?php endif ?>
      <?php endforeach ?>
    </select>
  </div>
  <div class="row">
    <select class="custom-select">
      <option selected>Niveau ...</option>
      <?php foreach($categories as $element): ?>
          <?php if($question->category==$element): ?>
            <option selected><?=$element?></option>
          <?php else: ?>
            <option><?=$element?></option>
          <?php endif ?>
      <?php endforeach ?>
    </select>
  </div>

  <div class="row">
    <input type="submit" class="btn btn-primary" name="" value="Jouer !">
  </div>

</div>
