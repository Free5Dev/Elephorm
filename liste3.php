<?php 
    // appel de la function de connexion à la bdd
    require_once('connexion.inc.php');
    // requete de selection à la bdd
    $reqSelect = $bdd->query("SELECT * FROM ARTICLES ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste d'ensemble</title>
</head>
<body>
    <table border='1' width='600' cellspacing='0' cellpadding='1'>
        <tr>
            <td>Reference</td>
            <td>Prix</td>
            <td>Details</td>
        </tr>
        <?php while($donnees =$reqSelect->fetch()) { ?>
        <tr>
            <td><?php echo $donnees['reference']; ?> </td>
            <td><?php echo $donnees['prix']; ?> </td>
            <td><a href="fiche3.php?ref=<?php echo $donnees['reference']; ?>">Voir</a></td>
        </tr>
        <?php  } $reqSelect->closeCursor(); ?>
    </table>
</body>
</html>