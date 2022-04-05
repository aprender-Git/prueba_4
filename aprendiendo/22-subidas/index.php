<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subir archivos</title>
</head>
<body>
    <h1>subir archivos</h1>



    <form action="upload.php" method="POST" enctype="multipart/form-data" >
           <input type="file" name="archivo">

           <input type="submit" value="enviar" >
    </form>

    <h1>listado imagenes</h1>

    <?php
    $gestor = opendir('./images');
    if ($gestor) {
        while (($image = readdir($gestor)) !==false ) {
            if ($image != '.' && $image != '..' ) {
               echo "<img src='images/$image' width='200px' height='200px'> <br>";
            }
        }
    }
    
    ?>
</body>
</html>