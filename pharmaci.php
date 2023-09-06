<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    <link rel="stylesheet" href="./ressources/css/demo.css">
    <link rel="stylesheet" href="./ressources/css/pharmatie.css">
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
               <a href="pharmaci.php">Pharmacie</a>
               <a href="garde.php">Garde</a>
               <a href="centre_de_sante.php">Centre de Santé</a>
               <a href="epidemie.html">Epidemie</a>
            </div>
        </div>
        <div class="dropdown_1">
            <button>Jobs</button>
            <div class="sous_content">
               <a href="offres_emploi.php">Offre d'emploi</a>
               <a href="activite.html">Activités</a>
            </div>
        </div>
        <a class="hover_a" href="logoutuser.php">Se Déconnecter</a>
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
<h2>Enregistre des pharmacie</h2>
        <form name="FORMPHARM" id="mypharm" action="pharmacie.php" method="post">
        <div>
                    <label for="valdpharm">chefferie</label>
                        <input type="text" name="validation" id="valdpharm" width="40"  disabled="disabled" value="encoursdevalidation"></input>
                </div></br> 
            <div>
                <div>
                    <label for="nompharm">Nom</label>
                        <input type="text" name="nom" id="nompharm"  width="40"></input>
                </div></br>
                <div>
                    <label for="respopharm">Responsable</label>
                        <input type="text" name="responsable" id="respopharm" width="40"></input>
                </div></br>
                <div>
                    <label for="telpharm">Telephone</label>
                        <input type="number" name="telephone" id="telpharm" width="40"></input>
                </div></br>
                <div>
                    <label for="adrpharm">Adresse</label>
                        <input type="text" name="adresse" id="adrpharm" width="40"></input>
                </div></br> 
                <div>
                    <label for="sitgeopharm">Situation Geographique</label>
                    <textarea name="situationgeographique"  id="sitgeopharm" width="40" ></textarea>
                </div></br> 
               
            </div><br/>
        
            <table>
                    <tr>
                        <td>
                <input type="submit" value="ENVOYER" width="60"></INput></br>
                        </td><td> <input type="reset" value="ANNULER" width="60"></input></br></td>  
        </td>
            </table>
    </form>
    

</body>
</html>
   
