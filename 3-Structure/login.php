<?php
session_start();
if(isset($_POST['bouton']))
{
	if($_POST['code']=='1234')
		{
		$_SESSION['code']='1234';
		header("Location:pagePrivee.php");
		}
	else
		{
		$erreur="Votre code est incorrect";
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>

<?php  if(isset($erreur))  echo "<h2>".$erreur."</h2>";  ?>

<form id="monform" name="form1" method="post" action="login.php">
  <p>
    <label>Code :
      <input type="text" name="code"  />
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
