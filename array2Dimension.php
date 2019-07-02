<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les tableaux a deux dimensions</title>
</head>
<body>
    <?php 
        // ligne 1
        $ligne1 = array(12, 14);

        echo"<pre>";
        print_r($ligne1);
        echo"</pre>";
        echo " L'indice zero de la ligne 1 est:".$ligne1[0];
        // ligne 2
        $ligne2 = array(16, 18);

        echo"<pre>";
        print_r($ligne2);
        echo"</pre>";
        echo " L'indice un de la ligne 2 est:".$ligne2[1];
       

        // ligne 3 affecté à la classe 
        $ligne3 = array(20, 22);

        echo"<pre>";
        print_r($ligne3);
        echo"</pre>";
        echo " L'indice zero de la ligne 3 est:".$ligne3[0];

         // classe qui est un array composé de ligne 1 et de ligne 2
         $classe = array($ligne1, $ligne2);
         $classe [] = $ligne3;


         echo"<pre>";
         print_r($classe);
         echo"</pre>";
         echo " L'indice deux de la classe 1 est:".$classe[2][1];
    ?>
</body>
</html>
