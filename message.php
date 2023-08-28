<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "";
   

    $nom= $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone= $_POST["telephone"];
    $email = $_POST["email"];
    $message = $_POST["message"];



    

    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO message(nom,prenom,telephone,email,message)
            VALUES(:nom, :prenom, :telephone, :email, :message)");
         
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':telephone',$telephone);
        $sth->bindParam(':email', $email);
        $sth->bindParam(':message', $message);

        
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:merci.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
