<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démenagement</title>
    <link rel="stylesheet" href="./ressources/css/demo.css">
    <link rel="stylesheet" href="./ressources/css/demenage.css">
</head>
<body>
    <header id="navbar"  class="nav responsive">
        <div class="logo_site"><a href="index.php">PortailAllakro</a></div>
        <a class="hover_a" href="acceuiluser.php">Tableau de bord</a>
        <div class="dropdown_1">
            <button>Annonces</button>
            <div class="sous_content">
               <a href="nouveau.php">Aménagement</a>
               <a href="depart.php">Démenagement</a>
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

<div class="header_dem">
    <h2> Recensement quotidien des personnes qui déménage du quartier</h2>
</div>
<main>
<div class="contain_dem">
<div class="fomm"> 

<div class="demenagment-form">
  <!-- <span class="heading_dem">Renseigner ce formulaire pour votre déménagement</span> -->
  <form name="formdem" id="frmdeces" action="depart.php" method="post">
  <label for="numact">Identifiant</label>
   <input type="text" name="identifiant" id="numact" width ="40" required="" ></input>
        
    <input type="submit" value="ENVOYER" ></input>
    <input type="reset" value="ANNULER" width="60"></input>  

       
    
  </form>
</div>
</div>

   
</div>
</main>
   