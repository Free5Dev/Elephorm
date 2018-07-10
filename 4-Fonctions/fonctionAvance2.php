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
        function moyenne($x,$y,$unit="euro"){
            $res=($x+$y)/2;
            $res.=$unit;
            return $res;
        }
        // appel de la function 
        $calcul=moyenne(2,4," dollars");
        echo"La somme est: ".$calcul."<br/>";
        $calcul1=moyenne(6,8);
        echo"La somme est: ".$calcul1."<br/>";
    ?>
</body>
</html>