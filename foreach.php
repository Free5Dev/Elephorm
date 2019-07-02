<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les boucles foreach</title>
</head>
<body>
    <?php 
        //les boucles foreach avec les tableaux indicés
        $agence = array("Paris", "Marseille", "Nantes");
        foreach($agence as $ville){
            echo "L'agence de : ".$ville."<br/>";
        }
        echo"<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
        // les boucles foreach avec les tableaux associatifs
        $agence = array("Centre"=> "Paris", "Nord" =>"Marseille", "Sud"=>"Nantes");
        foreach($agence as $position => $ville){
            echo "L'agence de ".$position." se trouve à ".$ville."<br/>";
        }
    ?>
</body>
</html>