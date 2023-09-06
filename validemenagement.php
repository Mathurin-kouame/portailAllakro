<?php 
  $validemenagement = true;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="utf-8"/>
<title>Liste de Démenagement en cours de validation</title>
<link rel="stylesheet" href="./ressources/css/accueil_chefferie.css">
<link rel="stylesheet" href="./ressources/css/validemenagement.css">
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
           <div class="btn_login"><a href = "logout.php">Se Deconnecter</a></div> 
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
   
      <h1>liste des demenagements en cours de validation</h1>
      
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM acteur where etatact="encours" and natact="demenagement"');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                    echo '<th class="thliste">Action</th>';
                     echo '<th class="thliste">Identifiant</th>';
                     echo '<th class="thliste">Nom et prenoms</th>';
                     echo '<th class="thliste">Lieu de Depart</th>';
                     echo '<th class="thliste">Date de Depart</th>';
                     echo '<th class="thliste">Motif de part</th>';
                     echo '<th class="thliste">Etat</th>';

                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
              ?>
              <tr id="<?= $donnees["numact"] ?>">
                  <td><form name="formvalid" id="vald" action="validem.php" method="post">
                  <input type="submit" value="OK" width="60">
                  <input type= hidden onchange="changeValueOfCheckbox(<?= $donnees['numact']?>)" name="reussite" value="<?php echo $donnees['numact'];?>" class="Selected"> 
                  <select name="cocher" id="civil">
                  <option value="aquitterlequartier">aquitterlequartier</option>
                  <option value="annuler">encours</option></select></form></td>
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