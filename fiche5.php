<?php 
    // appel de la function de connexion à la bdd
    require_once("connexion.inc.php");
    // verification de la reception du parametre get
    if(isset($_GET['ref'])){
        // on affiche la select correspondant au parametre passé dans le get
        $reqSelect = $bdd->prepare("
            SELECT a.reference, a.prix, a.description, a.photo, f.intitule 
            FROM articles as a
            INNER JOIN familles as f 
            WHERE a.famillesID = f.ID AND  a.reference = ?
        ");
        $reqSelect->execute(array($_GET['ref']));
    }else{
        // sinnon on redirige l'utilisateur vers la liste des articles
        header("Location:liste5.php");
    }
    // requete de seelct in bdd with clause where
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
            <td><?php echo $donnees['intitule']; ?></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><img src="images/<?php echo $donnees['photo']; ?>" alt=""></td>
        </tr>
    </table>
</body>
</html>