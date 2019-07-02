<?php 
    if(isset($_POST['btnSubmit'])){
        if(empty($_POST['pseudo']) || empty($_POST['password'])){

            
        }else{
            $chps = "Champs vide";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les formulaires en php </title>
</head>
<body>
    <h1>Les formulaires en php</h1>
    <?php if(isset($error)) echo $error; ?> <? if(isset($chps)) echo $chps; ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
        <label for="pseudo"></label><input type="text" name="pseudo" id="pseudo">
        <label for="password"></label><input type="password" name="password" id="password">
        <input type="submit" name="btnSubmit" value="Connexion">
    </form>
</body>
</html>