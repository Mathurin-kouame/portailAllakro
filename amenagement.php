<?php 
    include_once("header.php")
?>
<main>

<div class="header_am">
    <h2> Recensement des Arrivées au Quartier</h2>
</div>

<div class="container_am">
<div class="contain_formul">
<div class="fomm"> 
<div class="amenagment-form">
  <span class="heading_am">Aménagement</span>
  <form>
    <label for="name">Nom:</label>
    <input type="text" required="">
    <label for="name">Prénoms:</label>
    <input type="text" required="">
    <div>
        <label for="sexnaiss">sexe</label>
        <select name="sexe" id="sexnaiss">
            <option value="">
            </option>
            <option value="homme">Homme</option>
            <option value="homme">Femme</option>
        </select>
     </div>
       <label for="name">fonction:</label>
    <input type="text" required="">
    <label for="name">Date de naissance:</label>
    <input type="sex" required="">
    <label for="name">Provenance:</label>
    <input type="text" required="">
    <div>
        <label for="sexnaiss">Mode d’hébergement à l’arrivée</label>
        <select name="sexe" id="sexnaiss">
            <option value="">
            </option>
            <option value="feminin">Nouvelle habitation</option>
            <option value="Masculin">Chez un parent</option>
        </select>
     </div>
     <label for="name">Nom de parent:</label>
    <input type="text" required="">
    <label for="name">Lieu d’habitation de la famille:</label>
    <input type="text" required=" à côté de..., où chez ... où en bas du quartier">
    <button type="submit" value="envoyer">Enregistrer</button>
<br>
    <button type="submit" value="envoyer"><a href="demenagement.php">Quitter le village</a></button>

  </form>
</div>
</div>

   
   
 </div>
</div>
</main>