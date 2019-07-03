<?php 
    //inclusion de la function de connexion à la bdd
    require_once("connexion.inc.php"); 
    $req = $bdd->query("SELECT * FROM articles  ");
    $donnees = $req->fetch();
    var_dump($donnees);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test de connexion</title>
</head>
<body>
    <?php 
        echo "La reference de l'article est: ".$donnees['reference'];
    ?>
</body>
</html>