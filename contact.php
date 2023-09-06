<?php include 'header.php' ?>
 <div class="form_acueil">    
   <h1>ENVOYEZ UN MESSAGE</h1>
        <form name="monform" id="frmcontact" action="message.php" method="post">
            <div>
                <div>
                    <label for="fname">NOM</label>
                        <input type="text" name="nom" id="fname"  width="40"></input>
                </div></br>
                <div>
                    <label for="lname">PRENOM</label>
                        <input type="text" name="prenom" id="Lname" width="40"></input>
                </div></br>
                <div>
                    <label for="tel">TELEPHONE</label>
                        <input type="number" name="telephone" id="tel" width="40"></input>
                </div></br>
                <div>
                    <label for="mail">EMAIL</label>
                        <input type="text" name="email" id="mail" width="40"></input>
                </div></br> 
                <div>
                    <label for="mess">MESSAGE</label>
                    <textarea name="message"  id="mess" width="40" ></textarea>
                </div></br> 
            </div></br>
            <input type="submit" value="ENVOYER" width="60"></input></br>
         </form>
        </div>
 <?php include 'footer.php' ?>