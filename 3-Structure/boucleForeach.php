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
        //structure de boucle foreach avec les tableaux indicés
        $agence=array("Paris","Nantes","Nice");
        foreach($agence as $ville){
            echo"L'agence de ".$ville." <br/>";
        }
        echo"<pre>";
        print_r($agence);
        echo"</pre>";
        //structures de boucles avec les tableaux associatifs
        $agences=array("Centre"=>"Paris","Nord"=>"Nantes","Sud"=>"Nice");
        foreach($agences as $localisation=>$lieu){
            echo"L'agence de : ".$localisation." se trouve à ".$lieu." <br/>";
        }
        echo"<pre>";
        print_r($agences);
        echo"</pre>";
    ?>
</body>
</html>