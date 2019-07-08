<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test download in php</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' enctype='multipart/form-data'>
        <label for="photo">Download Photo</label><input type="file" name="photo" id="photo">
        <input type="submit" name='btnDownload' value="Download">
    </form>
    <?php 
       echo"<pre>";
        print_r($_FILES);
       echo"</pre>";
    ?>
</body>
</html>