<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

   $numact= $_POST["reussite"];
   $lieact= $_POST["lieudedepart"];
   $datact= $_POST["datedepart"];
   $motact= $_POST["motifdepart"];
   $natact= $_POST["etat"]=demenagement;

  

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare ("
        UPDATE acteur SET etatact='encours', lieact='$lieact' , datact='$datact', motact='$motact', natact='$natact' WHERE acteur.numact ='$numact'");
        
        
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
