<?php 
    // appel de la function de connexion à la bdd
    require_once("connexion.inc.php");
    // verification de l'existe de la variable get reference
    if(isset($_GET['ref'])){
        // requete de select avec les marqueurs nominatifs 
        $reqSelect = $bdd->prepare("
            SELECT a.reference, a.prix, a.photo, a.description, f.intitule 
            FROM ARTICLES as a
            INNER JOIN familles as f
            ON a.famillesID = f.ID
            WHERE reference = ?
        ");
        $reqSelect->execute(array($_GET['ref']));
        $donnees = $reqSelect->fetch();
        var_dump($donnees);
    }else{ //s'il n'ya pas de parametre get on redirrige l'utilisateur
        header("Location:liste1.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche1</title>
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
            <td><?php echo $donnees['intitule']; ?></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><img src="images/<?php echo $donnees['photo']; ?>" alt="<?php echo $donnees['photo']; ?>"></td>
        </tr>
    </table>
</body>
</html>