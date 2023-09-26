<?php
require("enregisvalid.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="enregistrement.css">
    <title>formulaire simplon</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
</head>
<body>
     <div id="logo">
            <a href="./enregistrement.php"><img src="./image/simplon.png" class="simplon" title="simplon" ></a>
      </div>
    <fieldset class="contactez-nous">
           <legend><h1>ENREGISTREMENT DU PARTICIPANT</h1></legend> 
           
            <form action="" method="post">
                <?php
                    if(isset($erreur_message)){
                    echo ("<p>$erreur_message</p>");
                }
                ?>
             <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="entrez votre nom" >
             </div>
             <div>
                 <label for="nom">Prénom</label>
                 <input type="text" id="nom" name="prénom" placeholder="entrez votre prénom" >
             </div>
             <div>
                <label for="email">e-mail</label>
                <input type="email" id="email" name="email" placeholder="monadresse@mail.com" >
             </div>
             <div>
                <label for="number">Contact</label>
                <input type="tel" id="number" name="number" placeholder="entrez votre contact" >
             </div>
             <div class="boutt">
                <button type="submit" name="value" value="valider"> VALIDER</button>
             </div>
             <div class="liste">
                <button> <a href="./affiche.php"> VOIR LA LISTE</a></button>
             </div>
        </form>
    </fieldset>
</body>
</html>
