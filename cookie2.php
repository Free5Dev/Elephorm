<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage du resultat du cookie</title>
</head>
<body>
    <?php 
        echo "<pre>";
        print_r($_COOKIE['log']);
        echo "</pre>";
    ?>
</body>
</html>