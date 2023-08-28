<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Message</title>
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
      <center><h1>Message</h1></center>
      
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM  message');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                    echo '<th class="thliste">nom</th>';
                     echo '<th class="thliste">prenom</th>';
                     echo '<th class="thliste">telephone</th>';
                     echo '<th class="thliste">email</th>';
                     echo '<th class="thliste">message</th>';
                     
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
              ?>
              <tr id="<?= $donnees["id"] ?>">
                  <td><?php echo $donnees["nom"]; ?></td>
                  <td><?php echo $donnees["prenom"]; ?></td>
                  <td><?php echo $donnees["telephone"]; ?></td>
                  <td><?php echo $donnees["email"]; ?></td>
                  <td><?php echo $donnees["message"]; ?></td>
                 
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