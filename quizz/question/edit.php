<?php
include('categories.php');

if(isset($_GET['id'])){
  $id = $_GET['id']; //chaine de Kr
  $query = $db->prepare('SELECT * FROM question WHERE id = :id');
  $result = $query -> execute(array(
    ':id'=>intval($id)//mettre en numérique
  ));
  $question = $query->fetch(PDO::FETCH_OBJ);//renvoie un objet, contrairement a fetchAll qui renvoie un tableau.

}
 ?>

 <form method="post">
   <div class="form-group">
     <label for="">Intitulé : </label>
     <input value="<?=$question->title?>" type="text" class="form-control addQuest" name="title" >
   </div>

   <div class="form-group select">
     <select class="custom-select" name="category" id="categ">
       <option value="0">Choisir une catégorie</option>
       <?php foreach($categories as $element): ?>
           <?php if($question->category==$element): ?>
             <option selected><?=$element?></option>
           <?php else: ?>
             <option><?=$element?></option>
           <?php endif ?>
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

   <input type="submit" class="btn btn-primary" value="Mettre à jour" name="submit">

 </form>
