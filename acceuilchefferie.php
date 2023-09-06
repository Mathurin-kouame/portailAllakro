<?php 
  $acceuilchefferie = true;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="utf-8"/>
<title>Acteurs</title>
<link rel="stylesheet" href="./ressources/css/accueil_chefferie.css">
</head>
<body>
        <div class='row bg-primary'></div>
        <header id="mainheader" class="bg-danger" >  
        <nav class="mainnav">
           <div class="logo_p" ><a href = "index.php">PortailAllakro</a></div> 
            <div><a <?php echo !empty($acceuilchefferie)?"active" :"" ?> href="acceuilchefferie.php" >Tableau de bord</a></div>        
            <div><a  href="chefvalid.php" >Décès</a></div>
            <div><a <?php echo !empty($validnaissance)?"active" :"" ?> href="validnaissance.php">Naissance</a></div> 
            <div><a <?php echo !empty($validemenagement)?"active" :"" ?> href="validemenagement.php">Démenagement</a></div> 
            <div><a <?php echo !empty($liste_message)?"active" :"" ?> href="liste_message.php" >Messages</a></div>
            <div><a <?php echo !empty($referentiel)?"active" :"" ?> href="referentiel.php" >Liste acteurs</a></div>
           <div class="btn_login"><a href = "logout.php">Se Déconnecter</a></div> 
        </nav>
    </header>

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
      header("location:connexionadmin.php");
      die();
   }

?>               
    </div>
      <h1>Bienvenue  <?php echo $login_session; ?></h1> 
</body>
</html>
