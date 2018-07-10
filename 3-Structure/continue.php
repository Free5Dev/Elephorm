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
        //structure break
        $notes=array(1,1,1,0,1,1,1);
        for($i=0;$i<count($notes);$i++){
            if($notes[$i]==0) continue;
            echo $i." tours <br/>";
        }


        echo"<pre>";
        print_r($notes);
        echo"</pre>";
    ?>
</body>
</html>