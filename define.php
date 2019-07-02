<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les constantes en php define</title>
</head>
<body>
    <?php 
        define("chemin_image", "/images/");

        echo "Ceci est une constante en php : ".chemin_image;
    ?>
</body>
</html>