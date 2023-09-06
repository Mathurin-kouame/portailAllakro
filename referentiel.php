<?php 
  $referentiel = true;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="utf-8"/>
<title>Liste des habitants du village</title>
<link rel="stylesheet" href="./ressources/css/accueil_chefferie.css">
<link rel="stylesheet" href="./ressources/css/referentiel.css">
<body>
        <div class='row bg-primary'></div>
    <header id="mainheader" class="bg-danger" >  
        <nav class="mainnav">
           <div class="logo_p" ><a href = "index.php">PortailAllakro</a></div> 
            <div><a  <?php echo !empty($acceuilchefferie)?"active" :"" ?> href="acceuilchefferie.php" >Tableau de bord</a></div>        
            <div><a <?php echo !empty($validdeces)?"active" :"" ?> href="validdeces.php" >Decès</a></div>
            <div><a <?php echo !empty($validnaissance)?"active" :"" ?> href="validnaissance.php">Naissance</a></div> 
            <div><a <?php echo !empty($validemenagement)?"active" :"" ?> href="validemenagement.php">Démenagement</a></div> 
            <div><a <?php echo !empty($liste_message)?"active" :"" ?> href="liste_message.php" >Messageries</a></div>
            <div><a <?php echo !empty($referentiel)?"active" :"" ?> href="referentiel.php" >Liste Acteurs</a></div>
           <div class="btn_login"><a href = "logout.php">Se Deconnecter</a></div> 
        </nav>
    </header>
</head>
 <body>
    <h1>liste des metiers du village</h1>
    
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM acteur');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste"> N°</th>';
                     echo '<th class="thliste">Civilite</th>';
                     echo '<th class="thliste">Nom et prenom</th>';
                     echo '<th class="thliste">Telephone</th>';
                     echo '<th class="thliste">Age</th>';
                     echo '<th class="thliste">Pays de naissance</th>';
                     echo '<th class="thliste">Nationalite</th>';
                     echo '<th class="thliste">Situation matrimoniale</th>';
                     echo '<th class="thliste">Adresse</th>';
                     echo '<th class="thliste">Lire ou ecrire</th>';
                     echo '<th class="thliste">Niveau etude</th>';
                     echo '<th class="thliste">Profession</th>';
                     echo '<th class="thliste">Autres metiers</th>';
                     echo '<th class="thliste">Avez-vous des enfants</th>';
                     echo '<th class="thliste">Nombre enfant</th>';
                     echo '<th class="thliste">Communaute villageoise</th>';
                     echo '<th class="thliste">Statut professionnelle</th>';
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr>';
     echo '<td class="tdliste">' . $donnees ['numact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['civilact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['nomprenact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['telact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['agact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['paynaissact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['natiact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['sitmatact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['adract'] . '</td>';
     echo '<td class="tdliste">' . $donnees['leecract'] . '</td>';
     echo '<td class="tdliste">' . $donnees['nivact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['profesact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['autrmetact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['Avenfact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['nombenfact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['comvilact'] . '</td>';
     echo '<td class="tdliste">' . $donnees['statprofact'] . '</td>';

    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
  
    </body>
</html>