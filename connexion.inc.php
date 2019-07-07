<?php 
    try{
        $bdd = new PDO('mysql:host=localhost; dbname=catalogue; charset=utf8', 'root', '', array(
            PDO::ATTR_PERSISTENT => true
        ));
    }catch(PDOException $e){
        print "Erreur !:".$e->getMessage()."<br/>";
        die();
    }
?>