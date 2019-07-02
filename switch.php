<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les conditions switch case default hahah</title>
</head>
<body>
   <?php 
        $lg = "en";
        switch($lg){
            case "fr": 
                echo "Bonjour"; break; // break stop la condition arrêt directe
            case "en": 
                echo "Hello"; break;
            case "gt": 
                echo "Geuten tag"; break;
            case "es": 
                echo "Hola"; break;
            default: 
                echo "Inconnue langue";
        }
   ?>
</body>
</html>