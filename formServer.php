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
    <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="pseudo"></label><input type="text" name="pseudo" id="pseudo">
        <label for="password"></label><input type="password" name="password" id="password">
        <input type="submit" name="btnSubmit" value="Connexion">
    </form>
    <?php 
        echo"<pre>";
        print_r($_POST);
        echo"</pre>";
    ?>
</body>
</html>