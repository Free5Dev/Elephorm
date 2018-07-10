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
        //Les variables en tableaux à deux dimensions au tableaux matrices
        $ligne1=array(12,14);
        $ligne2=array(16,18);
        $ligne3=array(20,22);

        echo "la premiere ligne:".$ligne1[1]." <br/> La deuxième ligne:".$ligne2[1]."<br/>";
        // function print_r
        echo "<pre>";
        print_r($ligne1);
        print_r($ligne2);
        echo "</pre>";
        // function matrice de table
        $classe=array($ligne1,$ligne2);
        $classe[]=$ligne3;//ajout de la ligne3 à la classe 

        echo "ceci est la valeur d'un tableaux à deux dimensions ".$classe[1][1];
        echo"<pre>";
        print_r($classe);
        echo "</pre>";
            
   ?>
</body>
</html>