<?php
/*
cuatro variables de tipo string, int boolean  y que imprima un mensaje segun el tipon que sea
*/

$matriz=array("holamundo", 88);
$titulo="master php";
$numero = 1;
$verdadero = true;

if (is_array($matriz)) {
    echo "matris";
}
if (is_string($titulo)) {
    echo "string";
}
if (is_integer($numero)) {
    echo "numero";
}
if (is_bool($verdadero)) {
    echo "boleano";
}

?>