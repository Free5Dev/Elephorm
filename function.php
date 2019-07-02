<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fucntions simple</title>
</head>
<body>
    <?php 
        // declaration de function 
        function moyenne($a, $b){
            $result = ($a+$b)/2;
            return $result;
        }
        // appel de la function 
        $calcul = moyenne(4, 6);
        echo "La moyenne est : ".$calcul;
    ?>
</body>
</html>