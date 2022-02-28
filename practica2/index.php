<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once "Entidad.php";
use ENTIDAD\Entidad;
$i = new Entidad;
 $m =$i->select_pais();

if ($m != false) {
foreach ($m as $key ) {
    echo "  ";
    echo $key->getId();
    echo "  ";
    echo $key->getNombrePais();
    echo "  ";


}

}

?>    
</body>
</html>