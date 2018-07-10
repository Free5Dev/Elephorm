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
        //declaration d'une fonction en php
        function moyenne($x,$y){
            $res=($x+$y)/2;
            return $res;
        }
        // appel de la function 
        $calcul=moyenne(2,4);
        echo"La moyenne est: ".$calcul;"<br/>";
    ?>
</body>
</html>