<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
<title>Portail des acteurs</title>
<link rel="stylesheet" href="./ressources/css/depart.css">
<link rel="stylesheet" href="lien_vers_font_awesome.css">
<body>
    <div class='body'>
        <div class='row bg-primary'></div>
    <header id="mainheader" class="bg-danger" >
    </header>
    <script type="text/javascript">
          function changeValueOfCheckbox(check) {
            var tr = document.getElementById(check.value);
            var cssClass = tr.getAttribute('class');
            if (cssClass === null) {
              cssClass = '';
            }
            if (check.checked) {
              // add class selected
              cssClass += ' selected';
            } else {
              // suppression class selected
              var sel = ' selected';
              var i = cssClass.indexOf(sel);
              if (i > -1) {
                var tmp = cssClass.substring(0, i);
                tmp += cssClass.substring(i + sel.length);
                cssClass = tmp;
              }
            }
            tr.setAttribute('class', cssClass);
          }
      </script> 
</head>

<?php
   
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'pct_bd');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   $user_check = $_POST["identifiant"];
   
   $ses_sql = mysqli_query($db,"select nomprenact from acteur where numact = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nomprenact'];

   $count = mysqli_num_rows($ses_sql);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
 
   if($count!== 1) {

      echo "identifiant incorrect";
      header("location:demenagement.php");
   }
?>
</div>
<h2><a class="bouton-retour" href = "demenagement.php"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a></h2>
    <div class="dclararer"><h3>voulez-vous déclarer un démenagement de :<?php echo $login_session; ?>?</h3></div><br>

    <form name="formdep" id="frmdep" action="enrdem.php" method="post">
     
    <input type= hidden onchange="changeValueOfCheckbox(<?php echo $user_check;?>)"  name="reussite" value="<?php echo $user_check;?>" class="Selected">
    <div>
            <label for="numact">Identifiant</label>
                <input Type="text" name="identifiant" id=<?php echo $user_check;?>  value=<?php echo $user_check;?>  width ="40" disabled="disabled"></input>
        </div></br>
        <div>
            <label for="motact">motif de depart</label>
                <input type="text" name="motifdepart" id="motact" width ="40"></input>
                </div></br>
                <div>
            <label for="datact">date de demenagement</label>
                <input type="date" name="datedepart" id="datact" width ="40"></input>
                </div></br>
                <div>
            <label for="lieact">nouveau lieu d'habitation</label>
                <input type="text" name="lieudedepart" id="lieact" width ="40"></input>
                </div></br>
                <div>
            <label for="etatact">Chefferie</label>
            <input type="text" name="etat" id="etatact" width ="40" disabled="disabled"></input>
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

      




