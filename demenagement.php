<?php 
    include_once("header.php")
?>

<div class="header_dem">
    <h2> Recensement des personnes qui déménage du quartier</h2>
</div>
<main>
<div class="contain_dem">
<div class="fomm"> 

<div class="demenagment-form">
  <span class="heading_dem">Saisie pour  votre déménagement</span>

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
  </form>
</div>
</div>

   
</div>
</main>
   