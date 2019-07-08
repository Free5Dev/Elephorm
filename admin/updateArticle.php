<?php 
    session_start();
    if(isset($_GET['logout'])){
        unset($_SESSION['login']); unset($_SESSION['password']);
    }
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
        if(!empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_POST['description']) && $_FILES['photo']['error'] == 0){
            copy($_FILES['photo']['tmp_name'], '../images/'.$_FILES['photo']['name']);
            $reqUpdate = $bdd->prepare("
                UPDATE  articles SET  prix= ?, description= ?, famillesID= ?, photo = ? WHERE reference= ?
            ");
            $reqUpdate->execute(array(
                $_POST['prix'],
                 $_POST['description'],
                $_POST['familles'],
                $_FILES['photo']['name'],
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
    <a href="index.php?logout=deconnexion">Deconnexion</a>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype='multipart/form-data'>
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
        <img src="../images/<?php if(isset($_GET['ref'])) echo $donneesSelect['photo']; ?>" alt="<?php echo $donneesSelect['photo']; ?>" style='width:300px;'>
        <div class="group">
            <label for="photo">Download Photo</label><input type="file" name="photo" id="photo">
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