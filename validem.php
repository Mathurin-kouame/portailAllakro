<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "root";
   

    $selection = $_POST['cocher'];
    $numact = $_POST['reussite'];
    

   


    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        
        $sth = $dbco->prepare("
        UPDATE acteur SET etatact = :cocher  WHERE acteur.numact = :reussite");
        $sth->bindParam(':cocher',$selection);
        $sth->bindParam(':reussite',$numact);

        
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:validemenagement.php");
    
        }
    
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}




?>
