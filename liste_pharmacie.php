<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des pharmacies du village </title>
  <link rel="stylesheet" type="text/css" href="./ressources/css/liste_pharmacie.css" />
 </head>
 
 <body>
   
      <h1>liste des pharmacies du village</h1>
 
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM pharmacie');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste">N°</th>';
                     echo '<th class="thliste">Nom</th>';
                     echo '<th class="thliste">Adresse</th>';
                    echo '<th class="thliste">Telephone</th>';
                     echo '<th class="thliste">Responsable</th>';
                     echo '<th class="thliste">Situation Géographique</th>';
                     
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr>';
     echo '<td class="tdliste">' . $donnees ['numpharm'] . '</td>';
     echo '<td class="tdliste">' . $donnees['nompharm'] . '</td>';
     echo '<td class="tdliste">' . $donnees['adrpharm'] . '</td>';
     echo '<td class="tdliste">' . $donnees['telpharm'] . '</td>';
     echo '<td class="tdliste">' . $donnees['respopharm'] . '</td>';
     echo '<td class="tdliste">' . $donnees['sitgeopharm'] . '</td>';
     

    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
  
    </body>
</html>