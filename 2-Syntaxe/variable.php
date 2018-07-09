<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php

$prenom="jean";

echo gettype($prenom);

echo $prenom;

$retour="<br/>";
echo $retour;

//-------------------------

$age=35;

echo $age;

echo gettype($age);

echo $retour;
//-------------------------

$prix=100.50;

echo $prix;

echo gettype($prix);

echo $retour;
//-------------------------

$reponse=(4==4);

echo $reponse;

echo gettype($reponse);

echo $retour;
//-------------------------

$tableau[0]=4;
$tableau[1]=5;

echo $tableau[1];

echo gettype($tableau);

echo $retour;

?>
</body>
</html>