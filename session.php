<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation de session en php 
    </title>
</head>
<body>
    <?php 
        $_SESSION['log'] = "dev";
    ?>
    <h1>Creation de session <a href="session2.php">Ici</a></h1>
    <h1>Suppression de session <a href="sessionSup.php">Ici</a></h1>
</body>
</html>