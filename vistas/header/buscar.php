<?php

 $user = 'mascotas_usr';
$passwd = '7j4c6fu8sr';
$db = 'mascotas';
$port = 5432;
$host = 'localhost';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());


 $des=$_REQUEST['descripcion'];
 $id=$_REQUEST['precio'];

$datos = pg_query($cnx, "SELECT id,nombre from mascota where id_status=2 AND sexo=".$id."  ");
$resultado = pg_fetch_all($datos, PGSQL_ASSOC);
 echo json_encode($resultado);
?>


