<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bonjour en php</title>
</head>
<body>

   <?php 
        // les variables en tableaux indicés et associatifs
        //les tableaux indicés avec l'indice
        $tab[0]=12;
        $tab[1]=14; 
        $tab[2]=16;
        echo $tab[1];
        //function print_r pour un affichage directe
        echo"<pre>";
        print_r($tab);
        echo "</pre>";
         
        //les tableaux indicés sans l'indices
         $tab1[]=18;
         $tab1[]=20; 
         $tab1[]=22;
         echo $tab1[1];
         //function print_r pour un affichage directe
         echo"<pre>";
         print_r($tab1);
         echo "</pre>";

        //les tableaux indicés sur une même ligne avec la function array
        $tab2=array(24,25,26);
        echo $tab2[1];
        //function print_r pour un affichage directe
        echo"<pre>";
        print_r($tab2);
        echo "</pre>";


         //les tableaux associatifs ne peuvent se declarer qu'avec l'associations  
         $tabAss['ann']=28;
         $tabAss['ds']=30; 
         $tabAss['tss']=32;
         echo $tabAss['tss'];
         //function print_r pour un affichage directe
         echo"<pre>";
         print_r($tabAss);
         echo "</pre>";


         //les tableaux associatifs sur une seule ligne 
         $tabAssArray=array("ab"=>36,"dj"=>38,"tss"=>40);
         echo $tabAssArray['tss'];
         //function print_r pour un affichage directe
         echo"<pre>";
         print_r($tabAssArray);
         echo "</pre>";
   ?>
</body>
</html>