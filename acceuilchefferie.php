

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>

<title>Portail des acteurs</title>

<body>
    <div class='header row'><img src='banniere.jpg' id='image'></div>
    <div class='body'>
        <div class='row bg-primary'></div>
    <header id="mainheader" class="bg-danger" >
      
        
    <nav id="mainnav" >
              
              <a href="validdeces.php" class="text-white" ><b>deces</b></a>&ensp;
              <a href="validnaissance.php" class="text-white"><b>naissance</b></a>&ensp;
              <a href="validemenagement.php" class="text-white" ><b>demenagement</b></a>&ensp;
              <a href="liste_message.php" class="text-white" ><b>Message</b></a>&ensp;
              <a href="referentiel.php" class="text-white" ><b>liste acteur</b></a>&ensp;

            </nav>
    </header>
</head>
<?php
   
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
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
      <h2><a href = "logout.php">Se deconnecter</a></h2>
   
   

</body>
</html>
