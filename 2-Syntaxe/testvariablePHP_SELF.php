<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<form id="monform" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <p>
    <label>Nom :
      <input type="text" name="nom"  />
    </label>
  </p>
  <p>
    <label>Prénom :
      <input type="text" name="prenom"  />
    </label>
  </p>
  <p>
    <label>
      <input type="submit" name="bouton"  value="Envoyer" />
    </label>
  </p>
</form>


<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

</body>
</html>
