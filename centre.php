<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   
    $raisoccent = $_POST["nom"];
    $adrcent = $_POST["adresse"];
    $telcent = $_POST["telephone"];
    $celcent= $_POST["cellulaire"];
    $mailcent= $_POST["mail"];
    $agrcent= $_POST["agrement"];
    $respocent= $_POST["responsable"];
    $sitgeocent= $_POST["situationgeographique"];
    


    
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO sante (raisoccent,adrcent,telcent,celcent,mailcent,agrcent,respocent,sitgeocent)
            VALUES(:nom, :adresse, :telephone, :cellulaire, :mail, :agrement, :responsable,  :situationgeographique)");
         
        $sth->bindParam(':nom',$raisoccent);
        $sth->bindParam(':adresse',$adrcent);
        $sth->bindParam(':telephone',$telcent);
        $sth->bindParam(':cellulaire', $celcent);
        $sth->bindParam(':mail',$mailcent);
        $sth->bindParam(':agrement',$agrcent);
        $sth->bindParam(':responsable',$respocent);
        $sth->bindParam(':situationgeographique',$sitgeocent);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
