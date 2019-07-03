<?php 
    // appel de la function de la connexion à la bdd
    require_once("connexion.inc.php");
    // requete de select à la bdd
    $reqSelect = $bdd->query("SELECT * FROM ARTICLES");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des articles en bdd</title>
</head>
<body>
    <!-- table en html utilisatant php de dans -->
    <table border='1' width='600' cellspacing='0' cellpading='1'>
    <caption><marquee>Liste des articles</marquee></caption>
        <tr>
            <td>Reference</td>
            <td>Prix</td>
        </tr>
        <?php while($donnees = $reqSelect->fetch()) { ?>
        <tr>
            <td><?php echo $donnees['reference']; ?> </td>
            <td><?php echo $donnees['prix']; ?></td>
        </tr>
        <?php } $reqSelect->closeCursor(); ?>
    </table>
</body>
</html>