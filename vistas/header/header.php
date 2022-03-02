<!DOCTYPE html>
<html lang="en">
<head>
  <title>plantilla para mascotas</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="vistas/body/estilos.css">
<!--link rel="stylesheet" href="header/estilo_head.css"-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!--aqui se agrega el menu e imagen -->
<div class="header-fluid ">
<img class="img-fluid " style="width: 100%; max-height: 250px;" src="/prueba_4/header/img/portada.jpeg" alt="Chania">
</div>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Perdidos y encontrados</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Siguenos...</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"> Avisos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- aqui se agrega todo el contenidos de la pagina -->
<div class="container-fluid">
  <div class="row" >
    <div class="col-md-12  " style="background-color: rgb(237 237 237);">
    <h1>adopta a un amigo</h1>
    <p class="descripcion">
      ingresa tu ubicacion, selecciona una mascota envia el formulario,
         recibe una respuesta y podras ir a recojer a tu mascota en el albergue mas cercano..
        </p>
  </div>


  <div class="col-md-2 "   style="background: rgb(237 237 237); ">
   
  
  <form class="" style="margin: 28px 1px 0px 40px;" action="">

<h5 class="">Agregar filtros: </h5>
<hr>
            <div class="form-group">
              <label for="sel1">selecciones pais</label>
                <select class="form-control" id="sel1">
                  <option>Mexico</option>
                  <option>Estados Unidos</option>
                  <option>Canada</option>
                </select>
            </div>

            <div class="form-group">
              <label for="sel1">selecciones Estado</label>
                <select class="form-control" id="sel1">
                  <option>veracruz</option>
                  <option>Puebla</option>
                  <option>Guanajuato</option>
                  <option>Monterrey</option>

                </select>
            </div>

            <div class="form-group">
              <label for="sel1">selecciones municipio</label>
                <select class="form-control" id="sel1">
                  <option>Orizaba</option>
                  <option>Cordoba</option>
                  <option>Fortin</option>
                </select>
            </div>

            <div class="form-group">
              <label for="sel1">Amigable con</label>
                <select class="form-control" id="sel1">
                  <option>Niños</option>
                  <option>Adultos</option>
                  <option>Gatos</option>
                  <option>Perros</option>
                </select>
            </div>
<div class="card__button">
<button type="button" class="btn btn-dark btn-block ">Buscar </button>
</div>

    </form>
 
  </div>
    <div class="col-md-10" style="background-color: rgb(237 237 237);" >
    <?php
 include_once ("vistas/body/body.php");
 ?>
    </div>
  </div>

</div>

</body>
</html>