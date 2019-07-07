<?php 
    // function de connexion à la bdd
    require_once("../connexion.inc.php");

    // requete du menu deroulant 
    $reqMenu = $bdd->query("SELECT * FROM familles");
    // si on soumet le btn add 
    if(isset($_POST['btnAdd'])){
        if(!empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_POST['description'])){
            $reqInsert = $bdd->prepare("
                INSERT INTO articles(reference,prix,description,famillesID)
                VALUES (?, ?, ?, ?)
            ");
            $reqInsert->execute(array(
                $_POST['reference'],
                $_POST['prix'],
                 $_POST['description'],
                $_POST['familles']
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
    <h1>Formulaire d'ajout d'un article</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="group">
            <label for="reference">Reference</label><br/>
            <input type="text" name="reference" id="reference">
        </div>
        <div class="group">
            <label for="prix">Prix</label><br/>
            <input type="text" name="prix" id="prix">
        </div>
        <div class="group">
            <label for="description">Description</label><br/>
            <input type="text" name="description" id="description">
        </div>
        <div class="group">
            <label for="familles">Famille</label>
            <select name="familles" id="familles">
                <?php while($donneesMenu = $reqMenu->fetch()) { ?>
                <option value="<?php echo $donneesMenu['id']; ?>"><?php echo $donneesMenu['intitule']; ?></option>
                <?php } $reqMenu->closeCursor(); ?>
            </select>
        </div>
        <input type="submit" name="btnAdd" value="ADD">
    </form>

    <?php  
        echo"<pre>";
        print_r($_POST);
        echo "</pre>";
    ?>
</body>
</html>