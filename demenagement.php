<?php 
    include_once("header.php")
?>

<div class="header_dem">
    <h2> Recensement quotidien des personnes qui déménage du quartier</h2>
</div>
<main>
<div class="contain_dem">
<div class="fomm"> 

<div class="demenagment-form">
  <span class="heading_dem">Renseigner ce formulaire pour votre déménagement</span>
  <FORM name="formdem" id="frmdeces" action="depart.php" method="post">

 
            <label for="numact">Identifiant</label>
                <INput type="text" name="identifiant" id="numact" width ="40"  required></INput>
        
    <TAble>
        <TR>
            <TD>
    <input type="submit" value="ENVOYER" width="60"></INput></br>
</TD><TD> <input type="reset" value="ANNULER" width="60"></INput></br></TD>  
</TR>
</TAble>
       
    
  </form>
</div>
</div>

   
</div>
</main>
   