<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>

<title>Portail des acteurs</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="./style/style.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
    <div class='header row'><img src='banniere.jpg' id='image'></div>
    <div class='body'>
        <div class='row bg-primary'></div>
    <header id="mainheader" class="bg-danger" >
      <Table>
        <tr>
          <td>
      <div class="dropdown">
        <button class="dropbtn">MENU</button>
        <div class="dropdown-content">
          <a href="nouveau.php">Nouveau</a>
          
        </td>
       
        <td>
          <div class="dropdown">
            <button class="dropbtn">INFORMATION</button>
            <div class="dropdown-content">
              <a href="demenagement.php">Demenagement</a>
              <a href="offre.html">Offre</a>
              <a href="deces.html">deces</a>
              <a href="pharmacie.html">pharmacie</a>
              <a href="garde.php">garde</a>
              <a href="centre_de_sante.php">centre de santé</a>
              <a href="activite.html">activite</a>
              <a href="naissance.html">naissance</a>
              <a href="epidemie.html">epidemie</a>

              
        </td>
  <TD>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href = "logoutuser.php">Se deconnecter</a>
  </TD>

</tr>
</table> 
</div>
  
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
      header("location:connexionuser.php");
      die();
   }

?>
<h1>Bienvenue  <?php echo $login_session; ?></h1> 
                   
  
</body>
</html>
<style>
  input
  {
    float: right;
  }
  textarea
  {
    float: right;
  }
  .footer {
   
   width: 100%;
   background-color:silver;
   color: white;
   text-align: center;
}
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
  
</style>