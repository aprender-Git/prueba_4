<?php 
$user = 'postgres';
$passwd = '123456';
$db = 'practicas_sql';
$port = 5432;
$host = 'localhost';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
echo "Conexion exitosa <hr>";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página card</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/dark.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
</head>

<body class="">

    <h1>Nuestro equipo de expertos</h1>
    <p class="descripcion">Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición
        tipográfica</p>

    <!-- <div class="modo" id="modo">
        <i class="fas fa-toggle-on"></i>
    </div> -->

    <section class="card">
     
      <?php
      
      $query = "SELECT nombre_usuario from usuario"; 
$consulta =pg_query($cnx, $query);
if ($consulta) {
if (pg_numrows($consulta)>0) {
    while($obj=pg_fetch_object($consulta)){
       
        echo "    <div class='card__perfil'> ";
        echo "        <div class='card__nombre'> ";
        echo "            <img src='https://www.markuptag.com/images/user-img-1.jpg' alt=''> ";
        echo "<h2>";
        echo $obj->nombre_usuario;
        echo "</h2> ";
        echo "            <p>Diseñador web</p> ";
        echo "        </div> ";
        echo "        <hr> ";
        echo "        <div class='card__descripcion'> ";
        echo "            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolores perferendis rem ipsamveniam reiciendis eveniet optio eum velit, dignissimos asperiores fugit molestias ipsum temporibusrerum hic iste nulla vitae?</p> ";
        echo "        </div> ";
        echo "        <hr> ";
        echo "        <div class='card__button'> ";
        echo "            <a class='enlace' href='#'>Saber más</a> ";
        echo "        </div> ";
        echo "    </div> ";
    }
}
}
      
      
      ?>
        
    </section>

    <script src="js/main.js"></script>
</body>

</html>