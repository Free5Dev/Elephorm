<?php 
    // appel de la function de connexion à la bdd
    require_once("connexion.inc.php");
    // query select in bdd 
    $reqSelect = $bdd->query("SELECT reference, prix FROM articles ");
    // verification du parametre search 
    if(isset($_GET['search'])){
        $reqSelect = $bdd->prepare("SELECT reference, prix FROM articles WHERE famillesID LIKE ?");
        $reqSelect->execute(array("%$_GET[search]%"));
    }
    // requete du menu deroulant
    $reqMenu = $bdd->query("SELECT * FROM familles");
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
    <form method='get' action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="search">Rechercher un article</label>
       <select name="search" id="search">
            <?php while($donneesMenu = $reqMenu->fetch()) { ?>
            <option value="<?php echo $donneesMenu['id'] ?>" <?php if(!isset($_GET['search'])) $_GET['search']=1; if($_GET['search'] ==$donneesMenu['id']) echo "selected='selected'" ?>><?php echo $donneesMenu['intitule']; ?></option>
            <?php } $reqMenu->closeCursor(); ?>
       </select>
        <input type="submit" name="btnSearch" value="Search Artciles">
    </form>
    <?php  
       echo "<pre>";
        print_r($_GET);
       echo "</pre>";
    ?>
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
            <th><a href="fiche5.php?ref=<?php echo $donnees['reference']; ?>">VOIR</a></th>
        </tr>
        <?php } $reqSelect->closeCursor(); ?>
    </table>
</body>
</html>