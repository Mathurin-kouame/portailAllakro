<?php 
  $liste_message = true;

?>
  <!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="utf-8"/>
<title>Message</title>
<link rel="stylesheet" href="./ressources/css/accueil_chefferie.css">
<link rel="stylesheet" href="./ressources/css/messageListe.css">

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
    <!-- <img src="banniere.jpg" class="logo"> -->

    <div class="scroll-container">
      <h1>Messageries</h1> 
    </div>
      <div class="tableau-mess">  
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM  message');
  
        echo '<center><div class="Liste"><table>';
                 echo '<tr>';
                    echo '<th class="thliste">Nom</th>';
                     echo '<th class="thliste">Prenoms</th>';
                     echo '<th class="thliste">Téléphone</th>';
                     echo '<th class="thliste">Émail</th>';
                     echo '<th class="thliste">Messages</th>';        
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
              ?>
           
                <tr id="<?= $donnees["id"] ?>">
                    <div></div><td><?php echo $donnees["nom"]; ?></td>
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
  </div>
    </body>
</html>