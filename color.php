<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau de couleurs en php</title>
</head>
<body >
    <?php 
        $color = array("00", "33", "66", "99", "CC", "FF");

        for($rouge = 0; $rouge < 6; $rouge++){

            echo"<table border = '1' style='margin-bottom: 5px;'>";
                for($jaune = 0; $jaune < 6; $jaune++){

                    echo  "<tr>";  
                        for($vert = 0; $vert < 6; $vert++){
                            
                            $colorCellule = $color[$rouge].$color[$jaune].$color[$vert];
                           echo "<td bgColor=#". $colorCellule.">";
                           echo  $colorCellule;
                           echo "</td>"; 
                        }
                    echo  "</tr>";  
                }
            echo"</table>";
        }
        echo"<pre>";
        print_r($color);
        echo"</pre>";
    ?>
</body>
</html>