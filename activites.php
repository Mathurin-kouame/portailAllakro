
<!-- views/propose_job.php -->
<?php include_once("header.php"); ?>
<main>
    <div class="header_activites">
        <h2>activités</h2>
    </div>

    <div>
    <h1>Formulaire d'Activités</h1>

   <form>
        <label for="numacti">Numéro de l'Activité:</label>
        <input type="text" id="numacti" name="numacti">

        <label for="libacti">Libellé de l'Activité:</label>
        <input type="text" id="libacti" name="libacti">

        <label for="datedebacti">Date de Début:</label>
        <input type="date" id="datedebacti" name="datedebacti">

        <label for="datefinacti">Date de Fin:</label>
        <input type="date" id="datefinacti" name="datefinacti">

        <label for="duracti">Durée de l'Activité:</label>
        <input type="text" id="duracti" name="duracti">

        <button type="submit">Enregistrer l'Activité</button>
    </form>
    </div>
</main>

<?php include 'footer.php'; ?>
