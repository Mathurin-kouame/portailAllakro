<?php 
    include_once("header.php")
?>

<main>
<div class="header_centre_sante">
    <h2>Centre de santé</h2>
</div>
<div>
 
</div>
<div class="contain_formul">
<div class="fomm"> 
<div class="contre_sante-form">
  <span class="heading_sante">Formulaire de Centre de Santé</span>
  <FORM name="formcent" id="frmcent" action="centre.php" method="post">


    <label for="raisoccent">Nom du Centre:</label>
    <input type="text" id="raisoccent" name="nom" required="">
    
       <label for="adrcent">Adresse:</label>
    <input type="text" id="adrcent" name="adresse" required="">

    <label for="name">Téléphone:</label>
    <input type="tel" id="telcent" name="telephone" required="">

    <label for="celcent">Cellulaire:</label>
    <input type="tel" id="celcent" name="cellulaire" required="">

    <label for="mailcent">Email:</label>
    <input type="email" id="mailcent" name="mail" required="">

    <label for="agrcent">Numéro d'agrément:</label>
    <input type="text" id="agrcent" name="agrement" required="">

    <label for="supcent">Superviseur:</label>
    <input type="text" id="supcent" name="responsable" required="">

    <label for="sitgeocent">Situation geographique:</label>
    <input type="text" id="sitgeocent" name="situationgeographique" required="">

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
</main>

<?php 
    include_once("footer.php")
?>