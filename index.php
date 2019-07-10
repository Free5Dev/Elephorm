<?php 
    // appel function connexion à la bdd
    require_once("connexion.inc.php");
    // requete de selection à la bdd
    $req = $bdd->query("SELECT * FROM user");
    $donnees = $req->fetch();
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" href="./style.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Quando&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
    
    <!-- favicon -->
    <link rel="shortcut icon" href="https://cdn1.iconfinder.com/data/icons/dotted-charts/512/links_diagram-512.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <!-- include  header -->
    <?php include('header.inc.php'); ?>
    <!-- content form -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='post'>
        <div class="group">
            <label for="login">Login</label><input type="text" name='login' id='login'>
        </div>
        <div class="group">
            <label for="password">Password</label><input type="password" name="password" id="password">
        </div>
        <div class="group submit">
            <input type="submit" name='btnSubmit'  value="Submit">
        </div>
    </form>
</body>
</html>