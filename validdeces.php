<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des deces en cours de validation </title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script type="text/javascript">
          function changeValueOfCheckbox(check) {
            var tr = document.getElementById(check.value);
            var cssClass = tr.getAttribute('class');
            if (cssClass === null) {
              cssClass = '';
            }
            if (check.checked) {
              // add class selected
              cssClass += ' selected';
            } else {
              // suppression class selected
              var sel = ' selected';
              var i = cssClass.indexOf(sel);
              if (i > -1) {
                var tmp = cssClass.substring(0, i);
                tmp += cssClass.substring(i + sel.length);
                cssClass = tmp;
              }
            }
            tr.setAttribute('class', cssClass);
          }
      </script>
 </head>
 
 <body>
    <img src="banniere.jpg" class="logo">
      <center><h1>liste des deces en cours de validation</h1></center>
      
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM acteur where etatact="encoursdevalidation" and natact="deces"');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                    echo '<th class="thliste">action</th>';
                     echo '<th class="thliste">identifiant</th>';
                     echo '<th class="thliste">nometprenom</th>';
                     echo '<th class="thliste">lieudedeces</th>';
                     echo '<th class="thliste">datededeces</th>';
                     echo '<th class="thliste">motifdeces</th>';
                     echo '<th class="thliste">parentdudefunt</th>';
                     echo '<th class="thliste">etat</th>';

                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
              ?>
              <tr id="<?= $donnees["numact"] ?>">
                  <td><FORM name="formvalid" id="vald" action="vald1.php" method="post"><input type="submit" value="OK" width="60"> <input type= hidden onchange="changeValueOfCheckbox(<?= $donnees["numact"]?>)"  name="reussite" value="<?php echo $donnees['numact'];?>" class="Selected"> <select name="cocher" id="civil">
                <option value="rien"></option>
                  <option value="valider">valider</option>
                  <option value="rejeter">rejeter</option></select></form></td>
                  <td><?php echo $donnees["numact"]; ?></td>
                  <td><?php echo $donnees["nomprenact"]; ?></td>
                  <td><?php echo $donnees["lieact"]; ?></td>
                  <td><?php echo $donnees["datact"]; ?></td>
                  <td><?php echo $donnees["motact"]; ?></td>
                  <td><?php echo $donnees["nomprenparact"]; ?></td>
                  <td><?php echo $donnees["etatact"]; ?></td>
              </tr>
  <?php
            }
  echo '</table></div>';
            $pdo = null;
            if (isset($_POST['cocher'])) 
  {
      echo "nom sélectionné : ", $_POST['cocher'];
  }

        ?>
  
  </br>
  </br>
  </center>
    </body>
</html>