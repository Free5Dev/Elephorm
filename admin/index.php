<?php 
    // appel function de connexion à la bdd
    require_once("../connexion.inc.php");
    //var_dump($_POST);
    // query select
    $query = $bdd->query("SELECT * FROM user");
    // verification de paramtre get
    if(isset($_GET['search'])){
        $query = $bdd->prepare("SELECT nom FROM articles WHERE login like ? ");
        $query->execute(array("%$_GET[search]%"));
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Quando&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
    
    <!-- favicon -->
    <link rel="shortcut icon" href="https://cdn1.iconfinder.com/data/icons/dotted-charts/512/links_diagram-512.png" type="image/x-icon">
     <!-- css -->
     <link rel="stylesheet" href="./../style.css">
    <title>Gestion des users</title>
</head>
<body>
    <!-- appel du header -->
    <?php 
        include("../header.inc.php");
    ?>
    <!-- content admin  -->
    <div id="main_page">
        <h1>Gestion des users</h1>

        <!-- form search -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" id="form">
            <a href="addUser.php">ADD USER</a>
            <label for="search">Search User</label>
            <input type="search" name="search" id="search" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>">
            <input type="submit" name="btnSearch" value="Search">
        </form>

        <!-- table content user list -->
        <table border="1" cellspacing="0" cellpadding="1" >
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php while($donnees = $query->fetch()) { ?>
            <tr>
                <td><?php echo $donnees['id']; ?></td>
                <td><?php echo $donnees['nom']; ?></td>
                <td><a href="">Modif</a></td>
                <td><a href="">Supprime</a></td>
            </tr>
            <?php } $query->closeCursor(); ?>
        </table>
    </div>
</body>
</html>