<?php 
    // appel de la function de connexion à la bdd
    require_once('connexion.inc.php');
    $reqSelect = $bdd->query("SELECT * FROM ARTICLES ");
    // verification de la soumission du formulaire
    if(isset($_GET['btnSearch'])){
        // requete de selection à la bdd
        // $reqSelect =$bdd->prepare('SELECT * FROM articles WHERE description LIKE  ? ');
        // $reqSelect->execute(array('%$_GET[search]%'));

        //$reqSelect=$bdd->prepare("SELECT * FROM articles WHERE description LIKE ?");
        $reqSelect =$bdd->prepare('SELECT * FROM articles WHERE description LIKE  ? ');
        // $reqSelect->execute(array("%$_GET[search]%"));
          $reqSelect->execute(array("%$_GET[search]%"));
    }//else{
    //     // requete de selection à la bdd
    //     $reqSelect = $bdd->query("SELECT * FROM ARTICLES ");
    // }
    
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
    <!-- formulaire de recherche ds'article -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="search">Rechercher un article</label>
        <input type="search" name="search" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>" id="search">
        <input type="submit" name="btnSearch" value="Search">
    </form>
    <?php var_dump($_GET); ?>
    <table border='1' width='600' cellspacing='0' cellpadding='1'>
        <tr>
            <td>Reference</td>
            <td>Prix</td>
            <td>Details</td>
        </tr>
        <?php while($donnees=$reqSelect->fetch()) { ?>
        <tr>
            <td><?php echo $donnees['reference']; ?> </td>
            <td><?php echo $donnees['prix']; ?> </td>
            <td><a href="fiche4.php?ref=<?php echo $donnees['reference']; ?>">Voir</a></td>
        </tr>
        <?php  } $reqSelect->closeCursor(); ?>
    </table>
</body>
</html>