<?php
//operadores de comparacion
// == igual  
// ===identico
// != diferente 
//  <> diferente 
//  !== no identico
//    < menos que
//    >mayor quw 
//    <= menor o igual que
//    >= mayor o igual que 




/*
operadores logicos 
&&  and  y has esto
|| or o sino has lo otro 
! no   que sea falso
AND, or 



*/
//ejemplo 1
$color= "verde";
if ($color == "rojo") {
    echo "el color es $color";
}else{
    echo "el color no es rojo ";
}
echo "<br>";
//ejemplo 2
$year = 2019;
if($year >=2019){
   echo "estamos en 2019 o adelante";
}else{
    echo " anteior  2019";
}
//ejemplo 3


$nombre = "victor";
$ciudad = "mexico";
$continente="latam";
$edad = 25;
$mayoria_de_edad =18;

if ($edad>=$mayoria_de_edad) {
  echo "<h1>$nombre es mayor de edad</h1>";
  if ($continente == "latam") {
    echo "<h2>y es de $ciudad</h2>";

  }else {
      echo "no es de latam";
  }
}else{
    echo"<h1>$nombre no es mayor de edad</h1>";
}
echo '<hr>';

echo '<br>';
$dia =3;

/*
if ($dia== 1) {
   echo "es lunes ";
} else {
  if ($dia == 2) {
echo 'es martes';
  } else {
echo "otro dia ";
  }
  
}


if ($dia ==1) {
    echo 'lunes';
}elseif($dia==2){
    echo 'martes';
}else{
    echo "otro dia";
}*/
echo "<hr>";
$edad1 =18;
$edad2 =64;

$edad_oficial= 60;

if($edad_oficial>=$edad1 && $edad_oficial<=64){
 echo "puedes trabajar ";
}else{
    echo "no puedes trabajar";
}


$pais = "eua";
if ($pais=="mexico" || $pais=="españa") {
 echo "hablan español";
}else{
    echo "no hablan esp";
}


echo "<hr>";

$dia=5;
switch ($dia) {
    case 1:
      echo "lunes";
        break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "x";
        break;
    case 4:
        echo "jueves";
        break;

    default:
      echo "viernes o fin de semana ";
        break;
}


echo "<hr> <br>";

goto marca;
echo "hola";
echo "hola";
echo "hola";
echo "hola";

marca:
echo "saltos de cuatro echos"

?>