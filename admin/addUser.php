<?php 
    // appel function de connexion à la bdd
    require_once("../connexion.inc.php");
    //    veriifcation de la soumission du formulaire
    if(isset($_POST['btnAdd'])){
       if(!empty($_POST['nom'] && $_POST['prenom'] && $_POST['login'] && $_POST['adresse'] && $_FILES['photo']['error']==0)){
            copy($_FILES['photo']['tmp_name'], '../images/'.$_FILES['photo']['name']);
            $queryInsert = $bdd->prepare("
            INSERT INTO user(login, prenom, nom, adresse, photo)
            VALUES (?, ?, ?, ?, ?)
                ");
            $queryInsert->execute(array(
                $_POST['login'],
               $_POST['prenom'],
               $_POST['nom'],
               $_POST['adresse'],
               $_FILES['photo']['name'],
            ));
            var_dump($queryInsert);
           // header("Location:index.php");
       }else{
           $chps="Les champs sont vide";
       }
    }
    // query sexe
    $querySexe = $bdd->query("SELECT * FROM genre");
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
        <h1>ADD USER</h1>

        <!-- form search -->
        <strong style="color:red;"><?php if(isset($chps)) echo $chps; ?></strong>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formAdd" enctype="multipart/form-data">
           <div class="group">
               <label for="prenom">Prenom</label>
               <input type="text" name="prenom" id="prenom"/>
           </div>
           <div class="group">
               <label for="nom">Nom</label>
               <input type="text" name="nom" id="nom"/>
           </div>
           <div class="group">
               <label for="login">Login</label>
               <input type="text" name="login" id="login"/>
           </div>
           <div class="group">
               <label for="adresse">Adresse</label>
               <input type="text" name="adresse" id="adresse"/>
           </div>
           <div class="group">
               <label for="photo">Download Photo</label>
               <input type="file" name="photo" id="photo"/>
           </div>
           <div class="group">
               <label for="adresse">Sexe</label>
               <select name="sexe" id="sexe">
                  <?php while($donneeSexe = $querySexe->fetch()) { ?>
                   <option value="<?php echo $donneeSexe['id']; ?>"><?php echo $donneeSexe['genre']; ?></option>
                  <?php } $querySexe->closeCursor(); ?>
               </select>
           </div>
           
            <input type="submit" name="btnAdd" value="ADD USER"/>
           
        </form>

    </div>
</body>
</html>