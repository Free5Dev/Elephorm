<?php 
    // connexion a la bdd
    try{//si tout va bien exceute try encas d'erreur arret tout et saute sur catch direct
        $bdd= new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
       
    }catch(Exception $e){
        die('Erreur:'.$e->getMessage());
    }
?>