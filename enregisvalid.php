<?php
    require_once("database.php");
?>
<?php 
    if(isset($_POST['value'])){
        if(!empty($_POST['nom'])&&
           !empty($_POST['prénom'])&&
           !empty($_POST['email'])&&
           !empty($_POST['number'])
        
        ){
            $nom=htmlspecialchars($_POST['nom']);
            $prenom=htmlspecialchars($_POST['prénom']);
            $email=htmlspecialchars($_POST['email']);
            $number=htmlspecialchars($_POST['number']);
    
            $requete="INSERT INTO enregistrement VALUES(?,?,?,?)";
            $insertion=$connexion->prepare($requete);
            $insertion->execute([$email,$nom,$prenom,$number]);
            $suces="enregistrement effectue";
           
        }
        else{
            echo('Veuillez remplir les champs');
            $erreur_message="veuillez remplir tous les champs";
        }
    }
?>