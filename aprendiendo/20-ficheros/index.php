<?php
/*/abrir archivo 
$archivo= fopen("fichero_texto.txt","a+");

//leer contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}
fwrite($archivo, "texto");
//cerrar archivo
fclose($archivo);*/

//copiar 
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("error");
//renombrar
//rename('fichero_texto2.txt', 'fichero_texto(modificado).txt')
//unlink('fichero_texto(modificado).txt');

if(file_exists("fichero_texto.txt")){
    echo "axiste";
}
?>