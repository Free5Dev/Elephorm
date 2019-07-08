<?php 
    session_start();
    if(isset($_GET['logout'])){
        unset($_SESSION['login']); unset($_SESSION['password']);
    }
    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
        header("Location:../registration.php");
    }
    // appel de la function de connexion à la bdd qui tiens en comptes du chemin du repertoire 
    require_once("../connexion.inc.php");
    
    // verification des parametre get supp pour plus de securité avant sde supprimer
    if(isset($_GET['ref']) && isset($_GET['Supp']) &&  $_GET['Supp']=='ok'){
        $reqDelete = $bdd->prepare("DELETE FROM articles WHERE reference = ?");
        $reqDelete->execute(array($_GET['ref']));
        echo "L'article: ".$_GET['ref']." à bien été supprimer";
    }
    // query select in bdd
    $reqSelect = $bdd->query("SELECT  * FROM articles ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des articles </title>
</head>
<body>
    <p><a href="addArticle.php">Ajout d'un article</a></p>
    <a href="index.php?logout=deconnexion">Deconnexion</a>
    <table border="1" cellspacing="0" cellpadding="0" width="600">
        <caption>Gestion des articles </caption>
        <tr>
            <th>Reference</th>
            <th>Modification</th>
            <th>Suppression</th>
            
        </tr>
        <?php while($donnees = $reqSelect->fetch()) { ?>
        <tr>
            <td><?php  echo $donnees['reference']; ?></td>
            <td><a href="updateArticle.php?ref=<?php  echo $donnees['reference']; ?>">Modif</a></td>
            <td><a href="index.php?ref=<?php  echo $donnees['reference']; ?>&amp;Supp=ok">Supp</a></td>
        </tr>
        <?php } $reqSelect->closeCursor();  ?>
    </table>
</body>
</html>