<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des naissances en cours de validation </title>
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
      <center><h1>liste des naissances en cours de validation</h1></center>
      
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM acteur where etatact= "encoursdevalidation" and natact="naissance"');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';

                     echo '<th class="thliste">cocher</th>';
                     echo '<th class="thliste">numero</th>';
                     echo '<th class="thliste">nature</th>';
                     echo '<th class="thliste">nometprenom</th>';
                    echo '<th class="thliste">datedenaissance</th>';
                     echo '<th class="thliste">pere</th>';
                     echo '<th class="thliste">mere</th>';
                     echo '<th class="thliste">lieudenaissance</th>';
                     echo '<th class="thliste">sexe</th>';
                     echo '<th class="thliste">lieudhabitation</th>';
                     echo '<th class="thliste">etat</th>';
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
              ?>
              <tr id="<?= $donnees["numact"] ?>">
                  <td><FORM name="formvalid" id="vald" action="valdnaisint1.php" method="post"><input type="submit" value="OK" width="60"> <input type= hidden onchange="changeValueOfCheckbox(<?= $donnees["numact"]?>)"  name="reussite" value="<?php echo $donnees['numact'];?>" class="Selected"> <select name="cocher" id="civil">
                <option value="rien"></option>
                  <option value="valider">valider</option>
                  <option value="rejeter">rejeter</option></select></form></td>
                    <td><?php echo $donnees["numact"]; ?></td>
                    <td><?php echo $donnees["natact"]; ?></td>
                    <td><?php echo $donnees["nomprenact"]; ?></td>
                    <td><?php echo $donnees["datnais"]; ?></td>
                    <td><?php echo $donnees["peract"]; ?></td>
                    <td><?php echo $donnees["meract"]; ?></td>
                    <td><?php echo $donnees["lienaissact"]; ?></td>
                    <td><?php echo $donnees["sexact"]; ?></td>
                    <td><?php echo $donnees["liehabact"]; ?></td>
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
    </body>
</html>