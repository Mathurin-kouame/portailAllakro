<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "root";
   

    $natacti = $_POST["nature"];
    $orgacti = $_POST["organisme"];
    $libacti = $_POST["libelle"];
    $date= $_POST["date"];
   
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO activite(natacti,orgacti,libacti,date)
            VALUES(:nature, :organisme, :libelle, :date)");

        $sth->bindParam(':nature',$natacti);
        $sth->bindParam(':organisme',$orgacti);
        $sth->bindParam(':libelle',$libacti);
        $sth->bindParam(':date',$date);
        $sth->execute();
        //  //On renvoie l'utilisateur vers la page de remerciement
          header("activite.php"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
