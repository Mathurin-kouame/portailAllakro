<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des pharmacies du village </title>
  <link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 
 <body>
    <img src="banniere.jpg" class="logo">
      <center><h1>liste des centres de sante  du village</h1></center>
 
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM sante');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste">numero</th>';
                     echo '<th class="thliste">nom</th>';
                     echo '<th class="thliste">adresse</th>';
                    echo '<th class="thliste">telephone</th>';
                    echo '<th class="thliste">cellulaire</th>';
                    echo '<th class="thliste">mail</th>';
                    echo '<th class="thliste">agrement</th>';
                     echo '<th class="thliste">responsable</th>';
                     echo '<th class="thliste">situationgeographique</th>';
                     
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr>';
     echo '<td class="tdliste">' . $donnees ['numcent'] . '</td>';
     echo '<td class="tdliste">' . $donnees['raisoccent'] . '</td>';
     echo '<td class="tdliste">' . $donnees['adrcent'] . '</td>';
     echo '<td class="tdliste">' . $donnees['telcent'] . '</td>';
     echo '<td class="tdliste">' . $donnees['celcent'] . '</td>';
     echo '<td class="tdliste">' . $donnees['mailcent'] . '</td>';
     echo '<td class="tdliste">' . $donnees['agrcent'] . '</td>';
     echo '<td class="tdliste">' . $donnees['respocent'] . '</td>';
     echo '<td class="tdliste">' . $donnees['sitgeocent'] . '</td>';
     

    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
  
    </body>
</html>