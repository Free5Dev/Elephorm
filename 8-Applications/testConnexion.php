<?php 
    // appel de la function de connexion à la bdd
    require_once("connexionMysql.inc.php");
    // requete de selection a la bdd et  a la table articles
    $req=$bdd->query("SELECT * FROM articles ");
    $donnees=$req->fetch();

    echo"<pre>";
    print_r($donnees);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>