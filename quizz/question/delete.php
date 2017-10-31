<?php
//echo 'delete';
//suppression de la question identifiée en id dans url
if(isset($_GET['id'])){
  $id = $_GET['id']; //chaine de Kr
  $query = $db->prepare('DELETE FROM question WHERE id = :id');
  $result = $query -> execute(array(
    ':id'=>intval($id)//mettre en numérique
  ));
  if($result){
    //en cas de succès redirection ver la liste
    header('location:?route=question/list');
  }else{
    echo "<p>Suppression impossible !</p>";
  }
}
?>
