<?php 

try{
    $bdd =new PDO('mysql:host=localhost;dbname=socialNetwork;charset =utf8', 'root', '', array(
        PDO::ATTR_PERSISTENT => true
    ));
}catch(PDOException $e){
    die('Erreur !:'.$e->getMessage().'<br/>');
    die();
}