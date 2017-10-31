<?php
include('header.php');
?>


<div class="container contact">

  <div class="col-md-9">
    <h2>Contact</h2>
    <form class="" action="form.php" method="post">
      <div class="form-group">
        <label for="objet">Objet : </label>
        <input class="form-control" type="text" name="objet"/>
      </div>

      <div class="form-group">
        <label for="message">Message : </label>
        <textarea class="form-control" name="message"></textarea>
      </div>

      <div class="">
        <input type="submit" name="" value="Valider">
      </div>
    </form>
  </div>

    <?php include("sidebar.php")?>

</div>


<?php
include('footer.php');
 ?>
