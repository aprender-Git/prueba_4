<?php
/**
 * crear un array con el conteniudio de u78na tabla 
 *  accion      aventura      deporte
 *  gta          assaing       fifa
 *  cod           chash         pes
 *  pugb          prince       moto
 */

$tabla = array(
    "Accion" => array("gta","call","pugb"),
    "Aventura" => array("assasins creed","chash bandict","prince"),
    "Deporte" => array("fifa 19","pes 19","moto 19")
);
$categorias=array_keys($tabla);

?>
<table border="1">
<?php require_once "includes/encabezados.php" ?>
<?php require_once "includes/primera.php" ?>
<?php require_once "includes/segunda.php" ?>
<?php require_once "includes/tercera.php" ?>

</table>