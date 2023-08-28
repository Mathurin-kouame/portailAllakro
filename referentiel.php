<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Liste des habitants du village</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 
 <body>
    <img src="banniere.jpg" class="logo">
    <center><H1>liste des metiers du village</H1></center>
    
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM acteur');
  
        echo '<center><div class="liste"><table>';
                 echo '<tr>';
                     echo '<th class="thliste">N°</th>';
                     echo '<th class="thliste">civilite</th>';
                     echo '<th class="thliste">nom et prenom</th>';
                     echo '<th class="thliste">telephone</th>';
                     echo '<th class="thliste">age</th>';
                     echo '<th class="thliste">pays de naissance</th>';
                     echo '<th class="thliste">nationalite</th>';
                     echo '<th class="thliste">situation matrimoniale</th>';
                     echo '<th class="thliste">adresse</th>';
                     echo '<th class="thliste">lire ou ecrire</th>';
                     echo '<th class="thliste">niveau etude</th>';
                     echo '<th class="thliste">profession</th>';
                     echo '<th class="thliste">autres metiers</th>';
                     echo '<th class="thliste">avez-vous des enfants</th>';
                     echo '<th class="thliste">nombre enfant</th>';
                     echo '<th class="thliste">communaute villageoise</th>';
                     echo '<th class="thliste">statut professionnelle</th>';
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