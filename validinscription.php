<?php
    $serveur = "localhost";
    $dbname = "pct_bd";
    $user = "root";
    $pass = "root";
   
   $type= $_POST["type"];
   $username= $_POST["username"];
   $email= $_POST["email"];
   $password= $_POST["pass"];
   $confirmpass= $_POST["confirm_pass"];

   

  
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare ("
        INSERT INTO users(type,username,email,password,confirmpass)
        VALUES(:type, :username, :email, :pass, :confirmpass)");
        
        $sth->bindParam(':type',$type);  
        $sth->bindParam(':username',$username);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':pass',$password);
        $sth->bindParam(':confirmpass', $confirmpass);
        $sth->execute();
         //On renvoie l'utilisateur vers la page de remerciement
         header("Location:compteremerciement.html"); 
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
