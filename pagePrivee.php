<?php 
    session_start();
    if(!isset($_SESSION['pseudo']) && !isset($_SESSION['password'])){
        header("Location:loginHeaderSession.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Private Page</title>
</head>
<body>
    <h1>My Private Page</h1>
</body>
</html>