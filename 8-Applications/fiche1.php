<?php 
  //appel de la function de connexion à la bdd
  require_once("connexionMysql.inc.php");
  //requete de selection d'une fiche
  $reqSelect=$bdd->query("SELECT reference, prix, designation, famillesID, photo FROM articles WHERE reference='ART56'");
  $donneesSelect=$reqSelect->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table width ="600" border="1" cellspacing="0" cellpadding="1">
    <tr>
      <td>Reference</td>
      <td><?php echo htmlspecialchars($donneesSelect['reference']); ?></td>
    </tr>
    <tr>
      <td>Prix</td>
      <td><?php echo htmlspecialchars($donneesSelect['prix']); ?></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><?php echo htmlspecialchars($donneesSelect['designation']); ?></td>
    </tr>
    <tr>
      <td>Famille</td>
      <td><?php echo htmlspecialchars($donneesSelect['famillesID']); ?></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td> <img src="images/<?php echo htmlspecialchars($donneesSelect['photo']); ?>" alt=""></td>
    </tr>
  </table>
</body>
</html>