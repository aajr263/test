<?php 
 $server="localhost";
 $login = "root";
 $password ="";
 try{
        $connexion = new PDO("mysql:host=$server;dbname=gestion_simplon",$login,$password);
 
 }
 catch(PDOException $e){
        echo("La connexion a echouée");
 }
 
?>