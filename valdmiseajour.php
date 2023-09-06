<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "root";
   

    $numact = $_POST['cocher'];
    

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
        UPDATE acteur SET etatact='decede'  WHERE acteur.numact= $numact");
        $sth->bindParam(':cocher',$numact);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:validation.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>

 
