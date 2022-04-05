<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>validaciones </h1>
    <?php
    if (isset($_GET['error'])) {
    $error = $_GET['error'];
   if ($error == "faltan_datos") {
      echo "<h1 style='color:red'>faltan campos a llenar </h1>";
   }
   if ($error == "nombre") {
    echo "<h1 style='color:red'>nombre </h1>";
 }

 if ($error == "apellidos") {
    echo "<h1 style='color:red'>apellidos </h1>";
 }
 if ($error == "pass") {
    echo "<h1 style='color:red'>pass </h1>";
 }
 if ($error == "email") {
    echo "<h1 style='color:red'>email </h1>";
 }
 
 if ($error == "edad") {
    echo "<h1 style='color:red'>edad </h1>";
 }
    }
    ?>

                    <form method="POST" action="procesar_formulario.php" >
                        <label for="nombre"> nombre</label>
                        <input type="text" name="nombre" ><br>
                        <label for="apellidos"> apellidos</label>
                        <input type="text" name="apellidos" ><br>
                        <label for="edad"  > edad</label>
                        <input type="text" name="edad" ><br>
                        <label for="email"> Email</label>
                        <input type="text"  name="email" ><br>
                        <label for="password"> pw</label>
                        <input type="password" name="password" ><br>

                        <input type="submit" value="enviar">

                    
                    </form>
</body>
</html>