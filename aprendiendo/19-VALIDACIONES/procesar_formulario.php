<?php
    $e='faltan_datos';
if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"])&& !empty($_POST["edad"])&& !empty($_POST["email"])&&!empty($_POST["password"])){
  $nombre = $_POST["nombre"];
  $apellidos = $_POST['apellidos'];
  $edad = (int)$_POST['edad'];
  $email = $_POST['email'];
  $pass = $_POST['password'];


  if(!is_string($nombre) || preg_match("/[0-9]/",$nombre))
      {
       echo  $e = "nombre";
      }
      if(!is_string($apellidos) || preg_match("/[0-9]/",$apellidos))
      {
       echo  $e = "apellido";
      }
      if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT))
      {
       echo  $e = "edad";
      }

if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
   echo $e='email';
}
if (empty($pass) || strlen($pass)<5) {
   echo $e="pass";
 }
 //$e='ok';

 header("location: index.php?error=$e");


}else {
    $e='faltan_datos';
    
}
if ($e!='ok') {
    header("location: index.php?error=$e");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($e="ok"): ?>
       <p> <?=$nombre?> </p>
       <p> <?=$apellidos?> </p>
       <p> <?=$edad?> </p>
       <p> <?=$email?> </p>
       <p> <?=$pass?> </p>
    <?php endif;?>
    
</body>
</html>