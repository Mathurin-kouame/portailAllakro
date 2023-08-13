
<!-- views/propose_job.php -->
<?php include_once("header.php"); ?>
<main>
    <div class="header_activites">
        <h2>activités</h2>
    </div>

</main>
<div class="containes">
<div class="form-activ">
  <span class="heading"></span>
  <form>
    <label for="numacti">Numéro de l'Activité:</label>
    <input type="text" id="numacti" name="numacti" required="">

    <label for="libacti">Description:</label>
    <input type="text" id="libacti" name="libacti" required="">

    <label for="datedebacti">Date de Début:</label>
    <input type="date" id="datedebacti" name="datedebacti" required="">

    <label for="datefinacti">Date de Fin:</label>
    <input type="date" id="datefinacti" name="datefinacti" required="">
    
    <label for="message">Description:</label>
    <textarea id="message" name="message" required=""></textarea>
    <button type="submit">Enregistrer l'Activité</button>
  </form>
</div>
</div>
<?php include 'footer.php'; ?>
