<?php
include("lib/functions.php");
include("datasource.php");
include("config.php");

$stagiaires =listTrainees(); //appelle la fonction qui est dans datasource

?>
<!--HEADER--->
<?php include("header.php")?>
<div class="container contenu">
  <div class="row">
    <div class="col-md-9 tab">
      <h2>Listes des stagiaires</h2>
      <table class="table table-striped table-border">
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Totem</th>
        <th>Note</th>
        <th>Moyenne</th>
      </tr>

      <?php /* autre moyens :
        for ($i = 0; $i<sizeof($stagiaires); $i++){
        echo "<tr>"."<td>" . $stagiaires[$i]["nom"] . "</td>" . "<td>". $stagiaires[$i]["prenom"] . "</td>"."</tr>";
          };
      */?>

      <?php
        foreach ($stagiaires as $element) {
          $average = average($element['notes'], 2);

          echo "<tr>";
          echo "<td>".firstCap($element["prenom"]) ."</td>";
          echo "<td><a href='stagiaire_details.php?id=".$element["id"]."'>".firstCap($element["nom"])."</a></td>";
                      //<a href='stagiaire_details.php?id=$element["id"]'>
          echo "<td><img src='". ASSETS_PATH ."img/totem/". $element['totem'] . "'/></td>";
                        //src='assest_path/img/totem/nomTotem.jpg'
          echo "<td>".lastMark($element["notes"])."</td>";

          if ($average < 10 && $average != AUCUNE_NOTE_MSG) {
            //echo '<td style="color:'.ERROR_COLOR.'">' . $moyenne . '</td>';
            echo '<td class="'.ERROR_CLASS.'">' . $average . '</td>';
          } else {
            echo '<td>' . $average . '</td>';
          }
          echo "</tr>";
        }
      ?>
    </table>
    </div>
    <div id="sidebar" class="col-md-3">
      <h4 class="sideTitle">Top 3 des meilleurs stagiaires : </h4>
      <?php include("sidebar.php")?>
    </div>
  </div>
</div>


<!--FOOTER--->
<?php include ("footer.php") ?>
