<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les variables en tableaux indicés et associatifs</title>
</head>
<body>
    <?php 
        //les tableaux indicés 1
        $indice1 [] = 12;
        $indice1 [] = 14;
        $indice1 [] = 16;

        echo"<pre>";
        print_r($indice1);
        echo"</pre>";
         //les tableaux indicés 2
         $indice2 [4] = 42;
         $indice2 [5] = 54;
         $indice2 [6] = 66;
 
         echo"<pre>";
         print_r($indice2);
         echo"</pre>";
          //les tableaux indicés 3
        $indice3 = array(33, 44, 55);

        echo"<pre>";
        print_r($indice3);
        echo"</pre>";

        echo"----------------------------------------------------------------";
         //les tableaux associatifs 1
         $associatif1 ["alain"] = 12;
         $associatif1 ["Rene"] = 14;
         $associatif1 ["Edouard"] = 16;
 
         echo"<pre>";
         print_r($associatif1);
         echo"</pre>";
          //les tableaux associatifs 2
          $associatif2  = array("vicot" => 77, "belcom" => 88, "sinon" => 99 );
          echo"<pre>";
          print_r($associatif2);
          echo"</pre>";
          echo"La valeur du tableau associatif 2 est: ".$associatif2['vicot'];
    ?>
</body>
</html>