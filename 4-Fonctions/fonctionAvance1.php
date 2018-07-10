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
            $som=$x+$y;
            $moy=$som/2;
            $res=array($som,$moy);
            return $res;
        }
        // appel de la function 
        $calcul=moyenne(2,4);
        echo"La somme est: ".$calcul[0]." et la moynne est: ".$calcul[1]."<br/>";
    ?>
</body>
</html>