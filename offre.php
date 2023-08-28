<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $typoff = $_POST["nature"];
    $nomprenoff = $_POST["nometprenom"];
    $servoff = $_POST["serviceoffert"];
    $compoff = $_POST["competence"];
    $teloff = $_POST["telephone"];
    $imgoff = $_POST["image"];
    $messoff = $_POST["message"];
    $datoff = $_POST["date"];
    


    
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO offre(typoff,nomprenoff,servoff,compoff,teloff,imgoff,messoff,datoff)
            VALUES(:nature, :nometprenom, :serviceoffert, :competence, :telephone, :image, :message, :date)");
         
        $sth->bindParam(':nature',$typoff);
        $sth->bindParam(':nometprenom',$nomprenoff);
        $sth->bindParam(':serviceoffert',$servoff);
        $sth->bindParam(':competence',$compoff);
        $sth->bindParam(':telephone', $teloff);
        $sth->bindParam(':image',$imgoff);
        $sth->bindParam(':message',$messoff);
        $sth->bindParam(':date',$datoff);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
