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
   define('DB_PASSWORD', '');
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
      header("location:deces.html");
   }

   
   
?>
</div>

    
    <h1>voulez-vous declarer le deces de :<?php echo $login_session; ?>?</h1> 
    <H1>Si oui veuillez remplir le formulaire ou cliquer sur retour pour revenir à la page precedente</H1>
    <h2><a href = "deces.html">retour</a></h2>
    <FORM name="formdec" id="frmdeces" action="deces.php" method="post">
     
    <input type= hidden onchange="changeValueOfCheckbox(<?php echo $user_check;?>)"  name="reussite" value="<?php echo $user_check;?>" class="Selected">
    <div>
            <label for="numact">Identifiant</label>
                <INput Type="text"   name="identifiant" id=<?php echo $user_check;?>  value=<?php echo $user_check;?>  width ="40" disabled="disabled"></INput>
        </div></br>
    <div>
            <label for="lieact"> lieu de deces</label>
                <INput type="text" name="lieudedeces" id="lieact" width="40"></INput>
        </div></br>
        <div>
            <label for="motact">motif du deces</label>
                <INput type="text" name="motifdeces" id="motact" width ="40"></INput>
        </div></br>
        
        <div>
            <label for="datact">date de deces</label>
            <INput type="date" name="datededeces"  id="datact" width="40" ></INput>
        </div></br>
        
        
        <div>
            <label for="nomprenparact">parent du defunt</label>
                <INput type="text" name="parentdudefunt" id="nomprenparact" width ="40"></INput>
        </div></br>

        <div>
            <label for="etatact">Chefferie</label>
                <INput type="text" name="etat" id="etatact" width ="40" disabled="disabled"></INput>
        </div></br>
    <TAble>
        <TR>
            <TD>
    <input type="submit" value="ENVOYER" width="60"></INput></br>
</TD><TD> <input type="reset" value="ANNULER" width="60"></INput></br></TD>  
</TR>
</TAble>
</form>

    </body>
</html> 

      