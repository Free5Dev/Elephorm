<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php
//declaration de la fonction moyenne
function  moyenne($x,$y,$unite="euros")
{
$res=($x+$y)/2;
$res.=$unite;
return  $res;
}
echo "Debut du programme <br/>";
$moncalcul1=moyenne(2,4,"dollars");
echo $moncalcul1;
echo "<br/>suite du programme<br/>";
$moncalcul2=moyenne(6,8);
echo $moncalcul2;



?>
</body>
</html>