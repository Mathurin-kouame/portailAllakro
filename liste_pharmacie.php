<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des pharmacies du village </title>
  <link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 
 <body>
    <img src="banniere.jpg" class="logo">
      <center><h1>liste des pharmacies du village</h1></center>
 
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM pharmacie');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste">numero</th>';
                     echo '<th class="thliste">nom</th>';
                     echo '<th class="thliste">adresse</th>';
                    echo '<th class="thliste">telephone</th>';
                     echo '<th class="thliste">responsable</th>';
                     echo '<th class="thliste">situationgeographique</th>';
                     
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