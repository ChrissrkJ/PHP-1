<?php
include('header.php');
include('lib/functions.php');
?>

<div class="container contact">
  <div class="col-md-9">
    <h2>Connexion</h2>
    <form action="login_success.php" method="post">
      <div class="form-group">
        <label for="objet">Nom : </label>
        <input class="form-control" type="text" name="nom" required/>
      </div>

      <div class="form-group">
        <label for="message">Mot de passe : </label>
        <input type="password" class="form-control" name="password" required/>
      </div>

      <div>
        <input class="btn btn-primary" type="submit" name="" value="Valider">
      </div>
    </form>
  </div>

<!---POSTER SUR LA MEME PAGE-->



    <?php include("sidebar.php")?>

</div>




<!--FOOTER--->
<?php
include('footer.php');
 ?>
