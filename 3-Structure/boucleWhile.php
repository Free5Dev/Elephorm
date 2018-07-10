<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        //structure de boucle while
        $i=5;//initialisation du compteur
        while($i>0){//condition de boucle
            echo"Encore ".$i." tours à faire<br/>";
            $i--;//decrement du compteur
        }
        echo"Fin de boucle";
    ?>
</body>
</html>