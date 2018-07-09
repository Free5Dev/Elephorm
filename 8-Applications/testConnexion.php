<?php
require_once("connexionMysql.inc.php");
$requete="SELECT reference,prix  FROM articles WHERE reference='ART56' ";
$resultat=mysql_query($requete);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php
$articles=mysql_fetch_array($resultat);

echo "VOTRE REFERENCE EST ".$articles['reference']." ET SON PRIX EST DE ".$articles['prix'];

echo "<pre>";
print_r($articles);
echo "</pre>";

?>
</body>
</html>