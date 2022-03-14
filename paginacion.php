<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paginacion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<h1>paginacion</h1>
<?php
$conexion = mysqli_connect('localhost', 'root', '','base1' );
$porpagina =2;
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
}else{
    $pagina =1;
}
$limpieza= ($pagina-1) * $porpagina;
$query= "SELECT * from articulos LIMIT $limpieza , $porpagina ";
$resultado = mysqli_query($conexion, $query);
?>

<?php
while ($fila = mysqli_fetch_assoc($resultado)) {?>
    <div class="alert alert-dark">
    <strong>nombre:</strong> <?php echo $fila['descripcion'] ?>
    </div>
<?php } ?>

<?php 
//seleccionar todo de la tabla
$query = " SELECT * FROM  articulos";
$resultado = mysqli_query($conexion, $query);
//contar el total de registros
$total_registros = mysqli_num_rows($resultado);
//usando ceil para dividir el total de regitros entre $porpagina;
// ceil se usa para redondear de forma superior ejemplo: [0,9 = 0][7,1 = 8] [3,9 = 4] o 0,9 = 0 
$total_pagina = ceil($total_registros/$porpagina);
//link a la primera
echo "<center><a href='paginacion.php?pagina=1'>".'primera'."&nbsp;</a>";
for ($i=1; $i <= $total_pagina; $i++) { 
echo "<a href='paginacion.php?pagina=".$i."'>".$i."&nbsp;</a>";
}
//link a la ultima pagina
echo "<a href='paginacion.php?pagina=$total_pagina'>&nbsp;".'ultima'."</a>";


?>
</body>
</html>