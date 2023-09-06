<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des pharmacies du village </title>
  <link rel="stylesheet" type="text/css" href="./ressources/css/liste_centre.css" />
 </head>
 
 <body>
    
      <h1>liste des centres de sante  du village</h1>
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM sante');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste">N°</th>';
                     echo '<th class="thliste">Nom</th>';
                     echo '<th class="thliste">Adresse</th>';
                    echo '<th class="thliste">Telephone</th>';
                    echo '<th class="thliste">Cellulaire</th>';
                    echo '<th class="thliste">Mail</th>';
                    echo '<th class="thliste">Agrement</th>';
                     echo '<th class="thliste">Responsable</th>';
                     echo '<th class="thliste">Situation Géographique</th>';
                     
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