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
<div class="fomm_sante"> 
<div class="contre_sante-form">
  <span class="heading_sante">Formulaire de Centre de Santé</span>
  <form>
    <label for="numcent">Numéro du Centre:</label>
    <input type="text" id="numcent" name="numcent" required="">

    <label for="nomcent">Nom du Centre:</label>
    <input type="text" id="nomcent" name="nomcent" required="">
    
       <label for="adrcent">Adresse:</label>
    <input type="text" id="adrcent" name="adrcent" required="">

    <label for="name">Téléphone:</label>
    <input type="tel" id="telcent" name="telcent" required="">

    <label for="celcent">Cellulaire:</label>
    <input type="tel" id="celcent" name="celcent" required="">

    <label for="mailcent">Email:</label>
    <input type="email" id="mailcent" name="mailcent" required="">

    <label for="agrcent">Numéro d'agrément:</label>
    <input type="text" id="agrcent" name="agrcent" required="">

    <label for="servcent">Service:</label>
    <input type="text" id="servcent" name="servcent" required="">

    <label for="supcent">Superviseur:</label>
    <input type="text" id="supcent" name="supcent" required="">

    <button type="submit" value="envoyer">Enregister </button>
  </form>
</div>
</div>
</main>
<?php 
    include_once("footer.php")
?>