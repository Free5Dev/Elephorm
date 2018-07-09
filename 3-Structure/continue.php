<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php

$tour=array(1,1,0,1,1,1,1);

echo "<pre>";
print_r($tour);
echo "</pre>";

for(  $i=0 ;  $i<7   ;  $i++ )
{
if($tour[$i]==0)  continue ;
echo "Tour N°".$i." <br/>";

}


?>
</body>
</html>