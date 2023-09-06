<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>offre d'emploi</title>
    <link rel="stylesheet" href="./ressources/css/demo.css">
    <link rel="stylesheet" href="./ressources/css/offre_emploi.css">
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

    <!-- <div class='header row'><img src='banniere.jpg' id='image'></div> -->
  
<h1>Enregistrer votre offre</h1>

<form name="monform" id="frmoffre" action="offre.php" method="post">

    <div>
        <div>
            <label for="typoff">Nature</label>
                <select name="nature" id="typoff">
                    <option value=""></option>
                    <option value="emploi">Emploi</option>
                    <option value="service">Service</option>
                    <option value="competence">Competence</option>
                  </select>
        </div></br>
        <div>
            <label for="nomprenoff">Nom et Prenoms</label>
                <input type="text" name="nometprenom" id="nomprenoff"  width="40"></input>
        </div></br>
        <div>
            <label for="servoff">Service Offert</label>
                <input type="text" name="serviceoffert" id="servoff" width="40"></input>
        </div></br>
        <div>
            <label for="compoff">Compétence</label>
            <input type="text" name="competence"  id="compoff" width="40" ></input>
        </div></br> 
        
        <div>
            <label for="teloff">Téléphone</label>
                <input type="number" name="telephone" id="teloff" width="40"></input>
        </div></br>
        <div>
            <label for="imgoff">Image</label>
                <input type="file"  name="image" id="imgoff" width="40"></input>
        </div></br> 
        <div>
            <label for="messoff">Message</label>
                <input type="text" name="message"  id="messoff" width="40"></input>
        </div></br>
        <div>
            <label for="datoff">Date</label>
            <input type="date" name="date"  id="datoff" width="40"></input>
        </div></br>
    </div></br>
    <table>
        <tr>
            <td>
    <input type="submit" value="ENVOYER" width="60"></input></br>
            </td><td> <input type="reset" value="ANNULER" width="60"></input></br></td>  
        </tr>
</table>
</form>

    </body>
    </html>