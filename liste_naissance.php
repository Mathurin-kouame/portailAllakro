<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des naissances en cours de validation </title>
  <link rel="stylesheet" type="text/css" href="./ressources/css/liste_naissance.css" />
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
   
      <h1>liste des naissances du moment</h1>
      
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM acteur where etatact= "valider" and natact="naissance"');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';

                    
                     echo '<th class=" thliste "> N°</th>';
                     echo '<th class=" thliste "> Nature</th>';
                     echo '<th class=" thliste "> Nom et Prenom</th>';
                     echo '<th  class="  thliste "> Date de Naissance</th>';
                     echo '<th class=" thliste "> Père</th>';
                     echo '<th class=" thliste "> Mere</th>';
                     echo '<th class=" thliste "> Lieu de Naissance </th>';
                     echo '<th class=" thliste "> Sexe</th>';
                     echo '<th class=" thliste "> Lieu d habitation </th>';
                     
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
              ?>
              
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