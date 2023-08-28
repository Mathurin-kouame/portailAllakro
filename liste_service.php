<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Offre d'emploi</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 
 <body>
    <img src="banniere.jpg" class="logo">
      <center><h1>liste des services proposes sur le portail</h1></center>
 
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM offre where typoff="service"');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste">serviceoffert</th>';
                     echo '<th class="thliste">competence</th>';
                     echo '<th class="thliste">telephone</th>';
                    echo '<th class="thliste">message</th>';
                    echo '<th class="thliste">date</th>';
                   
                     
                 echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr>';
     echo '<td class="tdliste">' . $donnees ['servoff'] . '</td>';
     echo '<td class="tdliste">' . $donnees['compoff'] . '</td>';
     echo '<td class="tdliste">' . $donnees['teloff'] . '</td>';
     echo '<td class="tdliste">' . $donnees['messoff'] . '</td>';
     echo '<td class="tdliste">' . $donnees['datoff'] . '</td>';
     
    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
  
    </body>
</html>