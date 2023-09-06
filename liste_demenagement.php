<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des deces en cours de validation </title>
  <link rel="stylesheet" type="text/css" href="./ressources/css/listedemenagement.css" />
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
      <h1>liste des demenagements </h1>
      
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM acteur where etatact="aquitterlequartier" and natact="demenagement"');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste"> Identifiant</th>';
                     echo '<th class="thliste"> Nom et Prenom</th>';
                     echo '<th class="thliste"> Lieu de Départ</th>';
                     echo '<th class="thliste"> date de Départ</th>';
                     echo '<th class="thliste"> motif de Départ</th>';
                     echo '<th class="thliste"> Etat</th>';
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
              ?>
              <tr id="<?= $donnees["numact"] ?>">
                
                  <td><?php echo $donnees["numact"]; ?></td>
                  <td><?php echo $donnees["nomprenact"]; ?></td>
                  <td><?php echo $donnees["lieact"]; ?></td>
                  <td><?php echo $donnees["datact"]; ?></td>
                  <td><?php echo $donnees["motact"]; ?></td>
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
    </body>
</html>