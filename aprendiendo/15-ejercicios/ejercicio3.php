<?php
/**
 * programa si una variable esta vacia y mostrar en mayus y negrita
 * 
 */

 $texto ="";
 if (empty($texto)) {
     $texto="relleno";
     $textoMayuscula = strtoupper($texto);
     echo "<strong>". $textoMayuscula."</strong>";
 }
?>