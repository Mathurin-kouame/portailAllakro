<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Message</title>
  <link rel="stylesheet" type="text/css" href="./ressources/css/liste_epidemie.css" />
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
      <h1>Message</h1>
      
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM  epidemie');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                    echo '<th class="thliste">N°</th>';
                     echo '<th class="thliste">Nom</th>';
                     echo '<th class="thliste">Libelle</th>';
                     echo '<th class="thliste">Date Début</th>';
                     echo '<th class="thliste">Date Fin</th>';
                     
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
              ?>
              <tr id="<?= $donnees["numepi"] ?>">
                  <td><?php echo $donnees["numepi"]; ?></td>
                  <td><?php echo $donnees["nomepi"]; ?></td>
                  <td><?php echo $donnees["libepi"]; ?></td>
                  <td><?php echo $donnees["datedebepi"]; ?></td>
                  <td><?php echo $donnees["datefiepi"]; ?></td>
                 
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