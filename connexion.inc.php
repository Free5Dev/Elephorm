<?php 
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=catalogue;', 'root', '');
    }catch(PDOException $e){ //en cas d'erreur von arret tout et on affiche l'erreur 
        print("Erreur:".$e->getMessage()."<br/>");
        die();
    }
?>