<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "root";
   
    $natact = $_POST["nature"]='naissance';
    $nomprenact = $_POST["nometprenom"];
    $sexact = $_POST["sexe"];
    $lienaissact= $_POST["lieudenaissance"];
    $datnais= $_POST["datedenaissance"];
    $peract= $_POST["pere"];
    $meract= $_POST["mere"];
    $liehabact= $_POST["lieudhabitation"];
    $etatact= $_POST["etat"]='encoursdevalidation';
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO acteur (natact,nomprenact,sexact,lienaissact,datnais,peract,meract,liehabact,etatact)
            VALUES(:nature, :nometprenom, :sexe, :lieudenaissance, :datedenaissance, :pere, :mere,  :lieudhabitation, :etat)");
         
        $sth->bindParam(':nometprenom',$nomprenact);
        $sth->bindParam(':sexe',$sexact);
        $sth->bindParam(':lieudenaissance',$lienaissact);
        $sth->bindParam(':datedenaissance', $datnais);
        $sth->bindParam(':pere',$peract);
        $sth->bindParam(':mere',$meract);
        $sth->bindParam(':lieudhabitation',$liehabact);
        $sth->bindParam(':nature',$natact);
        $sth->bindParam(':etat',$etatact);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:naissance.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
