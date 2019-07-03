<?php 
    // appel de la function de la connexion à la bdd
    require_once("connexion.inc.php");
    // requete de select à la bdd
    $reqSelect = $bdd->query("SELECT * FROM ARTICLES WHERE reference = 'ART56'");
    $donnees = $reqSelect->fetch();
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
    <caption><marquee>Liste de fiche article <?php echo $donnees['reference']; ?> </marquee></caption>
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