<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "root";
   

    $nomepi= $_POST["nom"];
    $libepi = $_POST["libelle"];
    $datedebepi = $_POST["dated"];
    $datefiepi = $_POST["datef"];


    

    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO epidemie(nomepi,libepi,datedebepi,datefiepi)
            VALUES(:nom, :libelle, :dated, :datef)");
         
        $sth->bindParam(':nom',$nomepi);
        $sth->bindParam(':libelle',$libepi);
        $sth->bindParam(':dated',$datedebepi);
        $sth->bindParam(':datef', $datefiepi);
        
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
