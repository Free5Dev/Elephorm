<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les conditions if en php </title>
</head>
<body>
    <?php 
        $age = 18;
        if($age < 18){
            echo"Mineur";
        }else if($age> 65){
            echo "Vieux en Retraite";
        }else{
            echo "Majeur";
        }
    ?>
</body>
</html>