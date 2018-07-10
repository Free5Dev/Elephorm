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
        //fucntion integre avec count 
        $note=array(1,2,2,1,1,0,1,1,1,1);
    $nb=count($note);
    echo $nb;
    for($i=0;$i<$nb;$i++){
        echo"Econr ".$i." tours à faire<br/>";
    }
        echo"<pre>";
        print_r($note);
        echo"</pre>";
    ?>
</body>
</html>