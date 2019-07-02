<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les instructions de controller break</title>
</head>
<body>
   <?php 
        $array = array(1, 1, 1, 1, 1, 2, 4);

        echo"<pre>";
        print_r($array);
        echo"</pre>";
        for($i = 0; $i < count($array); $i++){
            if($array[$i]== 2) break;{
                echo $array[$i];
            } 
           
        }
   ?>

</body>
</html>