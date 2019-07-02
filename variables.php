<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les variables et leurs types</title>
</head>
<body>
    <?php 
        $retour = "<br/>";
        // les entiers
        $int = 27;
        echo $int." est de type:".gettype($int).$retour;
        // les chaînes de caractères
        $chaine = "Dev";
        echo $chaine." est de type:".gettype($chaine).$retour;
        // les booleans
        $bool = true;
        echo $bool." est de type:".gettype($bool).$retour;
        // les arrays
        // $array[0] = 12;
        // $array [1] = 14;
        // echo $array." est de type:".gettype($array).$retour;
    ?>
</body>
</html>