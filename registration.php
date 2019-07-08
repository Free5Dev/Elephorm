<?php 
    session_start();
    //appel de la function de connexion à la bdd
    require_once("connexion.inc.php");
    // verification de la soumission du formulaire
    if(isset($_POST['btnConnexion'])){
        // verification de l'existance des champs
        if(!empty($_POST['login'] && $_POST['password'])){
            // verification des paramètres soumit correspond bien au parametre attendu
            if($_POST['login']=='free' && $_POST['password']=='1234'){
                $_SESSION['login'] = 'free'; $_SESSION['password'] = '1234';
                header("Location:admin/index.php");
            }else{
                $error = 'Error d\'identification';
            }
        }else{
            $chps = "Les champs sont vides...";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de connexion à la page admin</title>
</head>
<body>
    <span style='color:red;'><?php if(isset($chps)) echo $chps; if(isset($error)) echo $error; ?></span> 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" name="login" id="login">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" name='btnConnexion' value="Connexion">
    </form>
    <?php 
        var_dump($_POST);
    ?>
</body>
</html>