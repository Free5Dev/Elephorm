<?php 
    // appel de la function de connexion à la bdd
    require_once("connexion.inc.php");
    // query select in bdd 
    $reqSelect = $bdd->query("SELECT reference, prix FROM articles ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des articles 1</title>
</head>
<body>
    <table width='600' border='1' cellspacing='0' cellpadding='1'>
        <tr>
            <th>Reference</th>
            <th>Prix</th>
            <th>Details</th>
           
        </tr>
        <?php while($donnees = $reqSelect->fetch()) { ?>
        <tr>
           
            <td><?php echo $donnees['reference']; ?></td>
            <td><?php echo $donnees['prix']; ?></td>
            <th><a href="fiche2.php?ref=<?php echo $donnees['reference']; ?>">VOIR</a></th>
        </tr>
        <?php } $reqSelect->closeCursor(); ?>
    </table>
</body>
</html>