<?php

$numero=0;
while ($numero <= 100) {
  echo $numero;
  if ($numero != 100) {
      echo ", ";
  }
  $numero++;
}
echo "<hr>";

if (isset($_GET['numero'])) {
     $numero = $_GET['numero'];
}else {
    $numero=1;
}
echo "tabla de multiplicar $numero";
$contador =1;

while ($contador <= 10) {
echo "$numero x $contador = ".($numero*$contador)."<br/>";
$contador++;
}

$edad = 17;
$contador=1;

do{
echo "tienes acceso privado  $contador <br>";
$contador++;
}
while ($edad >= 18 && $contador <= 10);


//for
/**
 * for(variable contador, condicion , incremento){
 *  
 * }
 */



$resultado = 0;
for ($i=0; $i <= 100; $i++) { 
 $resultado += $i;
echo "<br> $resultado";
if($resultado==10){
echo "no se puede mostrar la opreacion de 10";
break;
}
}
echo $resultado;







?>