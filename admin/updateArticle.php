<?php 
    // function de connexion à la bdd
    require_once("../connexion.inc.php");

    // requete du menu deroulant 
    $reqMenu = $bdd->query("SELECT * FROM familles");
    // recuperation de parametre get
    if(isset($_GET['ref'])){
        $reqSelect = $bdd->prepare("SELECT * FROM articles WHERE reference = ?");
        $reqSelect->execute(array($_GET['ref']));
        $donneesSelect = $reqSelect->fetch();
        var_dump($donneesSelect);
    }
    // si on soumet le btn add 
    if(isset($_POST['btnUpdate'])){
        if(!empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_POST['description'])){
            $reqUpdate = $bdd->prepare("
                UPDATE  articles SET  prix= ?, description= ?, famillesID= ? WHERE reference= ?
            ");
            $reqUpdate->execute(array(
                $_POST['prix'],
                 $_POST['description'],
                $_POST['familles'],
                $_POST['reference']
            ));
            header("Location:index.php");
       }else{
           echo "vide";
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'ajout d'un article</title>
</head>
<body>
    <h1>Formulaire de modification  d'un article</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="group">
            <label for="reference">Reference</label><br/>
            <input type="text" name="reference" value="<?php if(isset($_GET['ref'])) echo $_GET['ref']; ?>" id="reference">
        </div>
        <div class="group">
            <label for="prix">Prix</label><br/>
            <input type="text" name="prix" value="<?php if(isset($_GET['ref'])) echo $donneesSelect['prix']; ?>" id="prix">
        </div>
        <div class="group">
            <label for="description">Description</label><br/>
            <input type="text" name="description" value="<?php if(isset($_GET['ref'])) echo $donneesSelect['description']; ?>" id="description">
        </div>
        <div class="group">
            <label for="familles">Famille</label>
            <select name="familles" id="familles">
                <?php while($donneesMenu = $reqMenu->fetch()) { ?>
                <option <?php if(!isset($_GET['ref'])) $donneesSelect['famillesID'] = 1;   if($donneesMenu['id'] == $donneesSelect['famillesID'] ) echo "selected= 'selected' "; ?> value="<?php echo $donneesMenu['id']; ?>"><?php echo $donneesMenu['intitule']; ?></option>
                <?php } $reqMenu->closeCursor(); ?>
            </select>
        </div>
        <input type="submit" name="btnUpdate" value="ADD">
    </form>

    <?php  
        echo"<pre>";
        print_r($_POST);
        echo "</pre>";
    ?>
</body>
</html>