<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php

// $notes[0]=15;
// $notes[1]=13;
// $notes[2]=19;
// $notes[3]=11;

// echo $notes[2];

// $notes[]=16;
// $notes[]=13;
// $notes[]=17;
// $notes[]=11;

//$notes=array(13,16,18,14);

$notes['jean']=15;
$notes['alain']=13;
$notes['anne']=19;
$notes['claire']=11;

echo $notes['alain'];

//$notes=array('jean'=>13,'alain'=>16,'anne'=>18,'claire'=>14);



echo "<pre>";
print_r($notes);
echo "</pre>";



?>
</body>
</html>