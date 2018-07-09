<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php
$notes=array(12,14,15,19,13);
$nb=count($notes);
echo $nb;
for($i=0;$i<$nb;$i++)
{
echo "<br/>note : ".$notes[$i];
}


?>
</body>
</html>