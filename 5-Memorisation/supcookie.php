﻿<?php
if(isset($_COOKIE['log']))
{
setcookie("log");
unset($_COOKIE['log']); 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php

if(isset($_COOKIE['log'])) echo "VOTRE LOG EST : ".$_COOKIE['log'];
?>
</body>
</html>