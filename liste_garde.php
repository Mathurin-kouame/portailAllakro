<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>phamacie de garde </title>
  <link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 
 <body>
    <img src="banniere.jpg" class="logo">
      <center><h1>liste des pharmacies de garde</h1></center>
 
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM garde');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste">numero</th>';
                     echo '<th class="thliste">nom</th>';
                     echo '<th class="thliste">date de debut</th>';
                     echo '<th class="thliste">date de fin</th>';
                     echo '<th class="thliste">situationgeographique</th>';
                     echo '<th class="thliste">telephone</th>';
                     
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr>';
     echo '<td class="tdliste">' . $donnees ['numgarde'] . '</td>';
     echo '<td class="tdliste">' . $donnees['pharmgarde'] . '</td>';
     echo '<td class="tdliste">' . $donnees['datdebgarde'] . '</td>';
     echo '<td class="tdliste">' . $donnees['datefgarde'] . '</td>';
     echo '<td class="tdliste">' . $donnees['sitgeopharmgarde'] . '</td>';
     echo '<td class="tdliste">' . $donnees['telgarde'] . '</td>';
    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
  
    </body>
</html>