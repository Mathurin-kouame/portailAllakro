<?php 
  $validnaissance = true;

?>
  <!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="utf-8"/>
<title>liste des naissances en cours de validation</title>
<link rel="stylesheet" href="./ressources/css/accueil_chefferie.css">
<link rel="stylesheet" href="./ressources/css/validenaissances.css">
<body>
        <div class='row bg-primary'></div>
        <header id="mainheader" class="bg-danger" >  
        <nav class="mainnav">
           <div class="logo_p" ><a href = "index.php">PortailAllakro</a></div> 
            <div><a <?php echo !empty($acceuilchefferie)?"active" :"" ?> href="acceuilchefferie.php" >Tableau de bord</a></div>        
            <div><a <?php echo !empty($validdeces)?"active" :"" ?> href="validdeces.php" >Decès</a></div>
            <div><a <?php echo !empty($validnaissance)?"active" :"" ?> href="validnaissance.php">Naissance</a></div> 
            <div><a <?php echo !empty($validemenagement)?"active" :"" ?> href="validemenagement.php">Démenagement</a></div> 
            <div><a <?php echo !empty($liste_message)?"active" :"" ?> href="liste_message.php" >Messageries</a></div>
            <div><a <?php echo !empty($referentiel)?"active" :"" ?> href="referentiel.php" >Liste Acteurs</a></div>
           <div class="btn_login"><a href = "logout.php">Se Déconnecter</a></div> 
        </nav>
    </header>
</head>
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
   
      <h1>liste des naissances en cours de validation</h1>
      
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM acteur where etatact= "encoursdevalidation" and natact="naissance"');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';

                     echo '<th class="thliste">Cocher</th>';
                     echo '<th class="thliste">Numéro</th>';
                     echo '<th class="thliste">Nature</th>';
                     echo '<th class="thliste">Nom et Prenoms</th>';
                    echo '<th class="thliste">date de Naissance</th>';
                     echo '<th class="thliste">Père</th>';
                     echo '<th class="thliste">Mère</th>';
                     echo '<th class="thliste">Lieu de Naissance</th>';
                     echo '<th class="thliste">Sexe</th>';
                     echo '<th class="thliste">Lieu d habitation</th>';
                     echo '<th class="thliste">État</th>';
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