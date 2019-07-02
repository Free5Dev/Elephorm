<?php 
    session_start();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage du session crée</title>
</head>
<body>
    <?php 
         echo "<pre>";
         print_r($_SESSION['log']);
         echo "</pre>";
    ?>
</body>
</html>