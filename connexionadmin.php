<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'pct_bd');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($db,$_POST['username']);
   $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
   
   $sql = "SELECT id FROM users WHERE users.username = '$myusername' and users.password = '$mypassword'  and users.type='administrateur'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
 
   if($count == 1) {
     
      $_SESSION['login_user'] = $myusername;
      
      header("location: acceuilchefferie.php");
   }else {
      echo "username ou mot de passe incorrect";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>se connecter</title>
  <link rel="stylesheet" href="./ressources/css/connexion.css">
</head>
<body>
  <div class="text_cnx">
  <h1>Se connecter</h1>
  </div>

<div class="login-box">
 
 <form action="" method=post>
   <div class="user-box">
     <input type="text" id="id" name="username">
     <label>pseudo</label>
   </div>
   <div class="user-box">
     <input type="password" id="motdepasse" name="password">
     <label>Votre mot de passe</label>
   </div>
   <a href="#" name="">
   <button type="submit" name="connexion">Connexion</button>
       
     
   </a>


 </form>
</body>
</html>