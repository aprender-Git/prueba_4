<?php
include_once "./Entidad/Mascota.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página card</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
</head>

<body class="">
  

    <section class="contenedor">
    <?php
    $length    = 3;	#número de registros a mostrar
    $start     = 0;     #posición de búsqueda
    if (isset($_GET['pagina'])) {
        $start = $_GET['pagina'];
    }else{
        $start =1;
    }
    $instancia = new mascotas();
    $Objetos = $instancia->select();
    if ($Objetos != false) {
     foreach ($Objetos as $key) {
         ?>


            <div class="card card__perfil" >
                    <div class="espacio">
                    <img class="card-img-top img_card" src="https://ichef.bbci.co.uk/news/800/cpsprodpb/15665/production/_107435678_perro1.jpg.webp" alt="Card image">
                    </div>
                <div class="card-body">
                    <h4 class="card-title card__nombre"><?php echo $key->getNombre();?>
</h4>
                    <p class="card-text">
                        <div class="row">
                            <div class="col-6 ">
                                
                            </div>

                            <div class="col-6 ">
                                
                            </div>

                        </div>
                        Raza aparente: <?php echo $key->getRaza();?> <br>
                        tamaño :  <?php echo $key->getTipo();?> <br>
                        fecha encontrado : <?php echo $key->getFechaEncontrado();?> <br>
                        Sexo : <?php echo $key->getSexo();?> <br>
                        Sociable : niños y adultos 
                    </p>
                            <div class="row ">
                                    <div class="col-6   texto">
                                        <button type="button" class="btn btn-success botones"> 
                                        <p class="a"> <i class='fas fa-dog' style='font-size:16px'></i>Adoptar</p> 
                                        </button>
                                    </div>

                                    <div class="col-6   texto2">
                                    <button type="button" class="btn btn-info botones">  
                                    <p class="a"> <i class='fas fa-paw' style='font-size:16px'></i>Ver mas</p> 
                                    </button>
                                    <br>
                                    </div>
                            </div>
                </div>
            </div>

<?php //llaves que cierran 
     }
    }
    ?>


    </section>


</body>

</html>