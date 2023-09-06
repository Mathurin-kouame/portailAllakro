<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    <link rel="stylesheet" href="./ressources/css/demo.css">
</head>
<body>
    <header id="navbar"  class="nav responsive">
        <div class="logo_site"><a href="index.php">PortailAllakro</a></div>
        <a class="hover_a" href="acceuiluser.php">Tableau de bord</a>
        <div class="dropdown_1">
            <button>Annonces</button>
            <div class="sous_content">
               <a href="nouveau.php">Aménagement</a>
               <a href="demenagement.php">Démenagement</a>
               <a href="naissance.php">Naissance</a>
               <a href="deces.html">Décès</a>
            </div>
        </div>
        <div class="dropdown_1">
            <button>Santés</button>
            <div class="sous_content">
               <a href="pharmacie.html">Pharmacie</a>
               <a href="garde.php">Garde</a>
               <a href="centre_de_sante.php">Centre de Santé</a>
               <a href="epidemie.html">Epidemie</a>
            </div>
        </div>
        <div class="dropdown_1">
            <button>Jobs</button>
            <div class="sous_content">
               <a href="offre.html">Offre d'emploi</a>
               <a href="activite.html">Activités</a>
            </div>
        </div>
        <a class="hover_a" href="logoutuser.php">Se Déonnecter</a>
        <a class="icon" onclick="myFunction()">&#9776;</a>
    </header>

    <script>
        function myFunction() {
            var x = document.getElementById("navbar");
            if (x.className === "nav") {
                x.className += "responsive";
            }else {
                x.className = "nav";
            }
        }
    </script>
<H1>ENREGISTRER PHARMACIE DE GARDE</H1>
  
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
        
    
</body>
</html>
