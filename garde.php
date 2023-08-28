<!DOCTYPE html>
<html>
<head>
<title>pharmacie de garde</title>
</head>
<body>
<div class='header row'><img src='banniere.jpg' id='image'></div>
<center><H1>ENREGISTRER PHARMACIE DE GARDE</H1>
  
        <FORM name="FORMGARDE" id="mygarde" action="pharmaciedegarde.php" method="post">
            <div>
                <div>
                    <label for="nompharm">Nom pharmacie</label>
                    <?php 
                    $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
                 
                   // Parcours du tableau
                   echo '<select name="nompharmacie">',"\n";
                   $requete = $bdd->query("SELECT * FROM pharmacie");
                 
                         while ($resultat = $requete->fetch())
                         {
                          $selected = (isset($_POST['nompharmacie']) && $_POST['nompharmacie'] == $resultat['nompharm']) ? ' selected="selected" ' : '';
                         echo "\t",'<option value="', $resultat['nompharm'],'"', $selected ,'>', $resultat['nompharm'] ,'</option>',"\n";
                         }
                   echo '</select>',"\n";
                 
                   // affichage ici de la valeur sélectionnée dans ma liste déroulante
                   if (isset($_POST['nompharmacie'])) 
                   {
                       echo "nom sélectionné : ", $_POST['nompharmacie'];
                   }
                 ?> 
                </div></br>
                <div>
                    <label for="datdebgarde">date de debut</label>
                        <INput type="date" name="dated" id="datdebgarde" width="60"></INput>
                </div></br>
                <div>
                    <label for="datefgarde">date de fin</label>
                        <INput type="date" name="datef" id="datefgarde" width="60"></INput>
                </div></br>
                <div>
                <label for="sitgeopharm">situation geographique</label>
                    <?php 
                    $bdd = new PDO('mysql:host=localhost;dbname=pct_bd;charset=utf8', 'root', '');
                 
                   // Parcours du tableau
                   echo '<select name="situationgeographique">',"\n";
                   $requete = $bdd->query("SELECT * FROM pharmacie");
                 
                         while ($resultat = $requete->fetch())
                         {
                          $selected = (isset($_POST['situationgeographique']) && $_POST['situationgeographique'] == $resultat['sitgeopharm']) ? ' selected="selected" ' : '';
                         echo "\t",'<option value="', $resultat['sitgeopharm'],'"', $selected ,'>', $resultat['sitgeopharm'] ,'</option>',"\n";
                         }
                   echo '</select>',"\n";
                 
                   // affichage ici de la valeur sélectionnée dans ma liste déroulante
                   if (isset($_POST['situationgeographique'])) 
                   {
                       echo "nom sélectionné : ", $_POST['situationgeographique'];
                   }
                 ?> 
                </div></br>
                
                <div>
            <label for="telgarde">telephone</label>
                <INput type="text" name="telephone" id="telgarde" width="40"></INput>
        </div></br>
                   
                 </div></br>
                 <TAble>
        <TR>
            <TD>
    <input type="submit" value="ENVOYER" width="60"></INput></br>
</TD><TD> <input type="reset" value="ANNULER" width="60"></INput></br></TD>  
</TR>
</TAble>
        </FORM>
        </center>  
    
</body>
</html>
