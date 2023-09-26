<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr" title="simplon">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage participant</title>
    <link rel="stylesheet" href="./affiche.css">
    <link rel="icon" type="image/x-icon" href="image/logo.png">
</head>

<body>
    <main class="table">
      <div id="logo">
            <a href="./enregistrement.php"><img src="./image/simplon.png" class="simplon" title="simplon" ></a>
      </div>
      <div id="ajout">
      <a href="./enregistrement.php"><img src="./image/add-button.png" class="ajouter" title="Ajouter"></a>
      </div> 
        <section class="table__header">
            <h1>PARTICIPANTS PRESENTS </h1>
        </section>
        <section class="table__body">
            <table>
                  <thead>
                        <tr>
                                <th title="Nom"> Nom </th>
                                <th title="Prenom"> Prénom</th>
                                <th title="Email"> Email </th>
                                <th title="Contact">Contact</th>
                        </tr>
                    </thead>
            
            <tbody>
                <?php 
                require_once("./database.php");
                $nombparti= "SELECT *FROM enregistrement";
                $partiaffi=$connexion->prepare($nombparti);
                $partiaffi->execute();
                $affiche=$partiaffi->rowCount();
                $parti= $partiaffi->fetchAll();
                ?>
                <tr>
                  <?php
                          foreach($parti as $ins){
                         ?>
                        
                             <td><?php echo($ins["nom"])?></td>
                             <td><?php echo($ins["prénom"])?></td>
                             <td><?php echo($ins["email"])?></td> 
                             <td><?php echo($ins["contact"])?></td>
                             </tr>  
                     <?php }?>
                    
            </tbody>
            </table>
        </section>
        
    </main>
        
</body>
</html>