<?php 
    // appel de la function de connexion à la bdd
    require_once("connexion.inc.php");
    // requete de seelct in bdd with clause where
    $reqSelect = $bdd->query("SELECT * FROM articles WHERE reference = 'ART56'");
    $donnees = $reqSelect->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche 1</title>
</head>
<body>
    <table border="1" width="600" cellspacing="0" cellpadding="1">
        <tr>
            <td>Reference</td>
            <td><?php echo $donnees['reference']; ?></td>
        </tr>
        <tr>
            <td>Prix</td>
            <td><?php echo $donnees['prix']; ?></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><?php echo $donnees['description']; ?></td>
        </tr>
        <tr>
            <td>Famille</td>
            <td><?php echo $donnees['famillesID']; ?></td>
        </tr>
    </table>
</body>
</html>