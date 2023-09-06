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

  
<?php
   
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'pct_bd');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:connexionuser.php");
      die();
   }

?>
<h4>Bienvenue  <?php echo $login_session; ?></h4> 

   <main class="main_users">
      
   </main>                
  


   </body>
</html>