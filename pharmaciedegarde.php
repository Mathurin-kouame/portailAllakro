<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $pharmgarde = $_POST["nompharmacie"];
    $datdebgarde = $_POST["dated"];
    $datefgarde = $_POST["datef"];
    $sitgeopharmgarde = $_POST["situationgeographique"];
    $telgarde = $_POST["telephone"];

   
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO garde(pharmgarde,datdebgarde,datefgarde,sitgeopharmgarde,telgarde)
            VALUES(:nompharmacie, :dated, :datef, :situationgeographique, :telephone)");
         
        $sth->bindParam(':nompharmacie',$pharmgarde);
        $sth->bindParam(':dated',$datdebgarde);
        $sth->bindParam(':datef',$datefgarde);
        $sth->bindParam(':situationgeographique',$sitgeopharmgarde);
        $sth->bindParam(':telephone',$telgarde);

        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
