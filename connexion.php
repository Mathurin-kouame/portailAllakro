<?php
// on vérifie si notre formulaire a été envoyé 
if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['motDePass'])) {
  $query = "SELECT * FROM users WHERE (email = :email)";
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
 
 <form>
   <div class="user-box">
     <input type="text" id="id" name="email" required="">
     <label>Votre adresse email</label>
   </div>
   <div class="user-box">
     <input type="password" id="motDePass" name="motDePass" required="">
     <label>Votre mot de passe</label>
   </div>

   <a href="#">
          connexion
      <span></span>
   </a>

 </form>
</body>
</html>