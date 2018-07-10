<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bonjour en php</title>
</head>
<body>

   <?php 
        // les variables et leurs types en php
        $retour="<br/>";

        //les chaines de caracteurs
        $nom="said";
        echo $nom." est de type ".gettype($nom)." ".$retour;
        //les entiers
        $age=25;
        echo $age." est de type ".gettype($age)." ".$retour;
        //les booleans
        $bol=(5==5);
        echo $bol." est de type ".gettype($bol)." ".$retour;
         //les array
         $notes[]=5;
         echo $notes[0]." est de type ".gettype($notes)." ".$retour;
         //les decimeaux
         $dec=5.5;
         echo $dec." est de type ".gettype($dec)." ".$retour;
        
   ?>
</body>
</html>