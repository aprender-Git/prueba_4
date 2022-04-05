<?php
/*
1 array 8 numero 
*/

function mostrarArray($numeros){
    $res="";
    foreach ($numeros as $r) {
        $res.=$r."</br>";
    }
    return $res;
}
$numeros=array(1,2,3,4,5,6,7,8,9,0);

echo "mostrar array sin orden";
echo mostrarArray($numeros);
echo "<h1> ordenar y mostrar </h1>";
sort($numeros);
echo mostrarArray($numeros);
echo "numero total de elementos ";
echo count($numeros);

echo "buscar numero "."<br>";
$buscar=1;
$search= array_search($buscar, $numeros);
if (!empty($search)) {
    echo "existe $buscar en el indice $search";
}else{
    echo "no existe ";
}

?>