﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        //function str_replace
        $source="bonjour";
        $search="o";
        $remplace="x";
        echo $source."<br/>";
        echo str_replace($search,$remplace,$source);
    ?>
</body>
</html>