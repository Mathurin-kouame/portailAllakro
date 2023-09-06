<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    <link rel="stylesheet" href="./ressources/css/demo.css">
    <link rel="stylesheet" href="./ressources/css/centre_de_sante.css">
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
        <a class="hover_a" href="/logoutuser.php">Se déconnecter</a>
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
<main>
<div class="header_centre_sante">
    <h2>Formulaire de Centre de Santé</h2>
</div>
<div>
 
</div>
<div class="contain_formul">
<div class="fomm"> 
<div class="contre_sante-form">
  <form name="formcent" id="frmcent" action="centre.php" method="post">
    <label for="raisoccent">Nom du Centre:</label>
    <input type="text" id="raisoccent" name="nom" required="">
    
       <label for="adrcent">Adresse:</label>
    <input type="text" id="adrcent" name="adresse" required="">

    <label for="name">Téléphone:</label>
    <input type="tel" id="telcent" name="telephone" required="">

    <label for="celcent">Cellulaire:</label>
    <input type="tel" id="celcent" name="cellulaire" required="">

    <label for="mailcent">Email:</label>
    <input type="email" id="mailcent" name="mail" required="">

    <label for="agrcent">Numéro d'agrément:</label>
    <input type="text" id="agrcent" name="agrement" required="">

    <label for="supcent">Superviseur:</label>
    <input type="text" id="supcent" name="responsable" required="">

    <label for="sitgeocent">Situation geographique:</label>
    <input type="text" id="sitgeocent" name="situationgeographique" required="">

    <table>
        <tr>
            <td>
    <input type="submit" value="ENVOYER" width="60"></input></br>
</td><td> <input type="reset" value="ANNULER" width="60"></input></br></td>  
</tr>
</table>
  </form>
</div>
</div>
</main>

