<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php
//----------Tableau indicé

// $agence=array("Paris","Lille","Marseille");
// foreach( $agence   as   $ville  )
// {

// echo "Ville: ".$ville." <br/>";

// }
//----------Tableau associatif
$agence=array("centre"=>"Paris","nord"=>"Lille","sud"=>"Marseille");

foreach($agence as  $cle=>$ville)
{

echo "L'agence du secteur ".$cle." se trouve à ".$ville." <br/>";

}
echo "<pre>";
print_r($agence);
echo "</pre>";

?>
</body>
</html>