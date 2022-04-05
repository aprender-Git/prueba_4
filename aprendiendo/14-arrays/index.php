<?php
/*
$peliculas = array('bob toronja','patricio','calamardo');
$cantante = ['cantante 1','cantante 2','cantante 3'];

//var_dump($peliculas[0]);
//echo"<br>";
//echo"<br>";
//var_dump($cantante[0]);
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++) { 
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

echo"<br>";
echo"<br>
<h1>cantantes</h1>
";
echo "<ul>";
foreach ($cantante as $key ) {
    echo $key."<br>";
}
echo "</ul>";*/


/*/arrays asociativos 
$personas =array(
    'nombre' => 'victor',
    'apellidos' => 'juarez',
    'fb'=> 'victor_juarez_96 '
);
echo $personas['apellidos'];

*///arrays multidimencionales
/*
$contactos = array(
    array(
        'nombre' => 'victor',
        'email'  => 'juarez'
    ),
    array(
        'nombre' => 'victor 1',
        'email'  => 'juarez 1'
    ),
    array(
        'nombre' => 'victor 2',
        'email'  => 'juarez 2'
    )
);

//echo $contactos[2]['email'];
foreach ($contactos as $key => $contacto) {
var_dump($contacto['nombre']);}*/
$cantantes=['2top','bety','angel'];
//alfabeto 
//asort($cantantes);
//inversa alfabeto
//arsort($cantantes);
$num=[1,2,3];
//sort($num);
//var_dump($num);
//$cantantes[]="miguel";

//array_push($cantantes,"mileidi");
//array_pop($cantantes);
//unset($cantantes[2]);
//sacar un dato aleatorio dentro del array

var_dump($cantantes);

$indice = array_rand($cantantes);
echo $cantantes[$indice];


//dar la vuelta aun array 
var_dump(array_reverse($num));

//buscar dentro de un array
$res=array_search('2top', $cantantes);
var_dump($res);
//contar num de elementos 
echo count($cantantes);
?>