<?php 
    $unan = 365*24*60*60; 
    setcookie("log", "dev", time()+$unan);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation de cookie en php</title>
</head>
<body>
    <h1>Creation de COOKIE<a href="cookie2.php">Ici</a></h1>
    <h1>Suppression de COOKIE<a href="cookieSup.php">Ici</a></h1>
</body>
</html>