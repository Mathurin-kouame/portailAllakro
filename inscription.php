
<?php 
var_dump($_POST);
if (empty($_Post)) {
  # code...
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="./ressources/css/inscription.css">
</head>
<body>
  <div class="text_inscrip">
  <h1>Veillez remplir se formulaire</h1>
  </div>

<div class="login-box">
 <form action="" method="post">
 <div class="user-box">
     <input type="text" id="id" name="username" required="">
     <label>Nom d'utisateur</label>
   </div>

   <div class="user-box">
     <input type="text" id="email" name="email" required="">
     <label>Votre adresse eamil</label>
   </div>

   <div class="user-box">
     <input type="password" id="pass" name="pass" required="">
     <label>Votre mot de passe</label>
   </div>

   <div class="user-box">
     <input type="password" id="confirm_pass" name="confirm_pass" required="">
     <label>Confirmez votre mot de passe</label>
   </div>
   <label>
    <input type="hidden" name="remember" value="0" />
    <input type="checkbox" name="remember" value="1" />
    <span>Se souvenir de moi</span>
    
  </label>
  
   <a href="#" name="">
   <button type="submit" name="inscription"  >Inscription</button>
       
     
   </a>

 </form>
</body>
</html>