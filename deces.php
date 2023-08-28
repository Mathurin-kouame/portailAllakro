<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

   $numact= $_POST["reussite"];
   $lieact= $_POST["lieudedeces"];
   $datact= $_POST["datededeces"];
   $motact= $_POST["motifdeces"];
   $nomprenparact= $_POST["parentdudefunt"];
   $natact= $_POST["etat"]=deces;

  

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare ("
        UPDATE acteur SET etatact='encoursdevalidation', lieact='$lieact' , datact='$datact', motact='$motact', nomprenparact='$nomprenparact', natact='$natact' WHERE acteur.numact ='$numact'");
        
        
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
