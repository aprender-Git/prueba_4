<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo de JavaScript</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container h-100">
        <div class="row">
            <form id="formulario1">
                <div class="form-group">
                    <label for="descripcion">Descripción del artículo</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>
                <div class="form-group">
                    <button type="button" id="boton1" class="btn btn-primary">Nuevo artículo</button>
                    <button type="button" id="boton2" class="btn btn-danger">buscar</button>

                </div>
            </form>

            <table class="table table-striped" id="tabla1">
            </table>
        </div>
    </div>

    <script>

        //llama a mostrar la tabla
        listar();
        //escucha boton on click
        document.getElementById("boton2").addEventListener("click", () => buscar());
        //metodo o funcion buscar
        function buscar () {
            const datos = new URLSearchParams(new FormData(document.getElementById("formulario1")));
            fetch('/prueba_4/vistas/buscar.php', {
                method: 'POST',
                body: datos
            })
                .then(response => response.json())
                .then(datos => {
                    let cad = '<tr><th>Código</th><th>Descripción</th><th>Precio</th></tr>';
                    for (let articulo of datos) {
                        cad += `<tr><td>${articulo.codigo}</td>
            <td>${articulo.descripcion}</td>
            <td>${articulo.precio}</td></tr>`;
                    }
                    document.getElementById("tabla1").innerHTML = cad;
                });
        }

        function  listar(){

            fetch("lista.php")
                .then(response => response.json())
                .then(datos => {
                    let cad = '<tr><th>Código</th><th>Descripción</th><th>Precio</th></tr>';
                    for (let articulo of datos) {
                        cad += `<tr><td>${articulo.codigo}</td>
            <td>${articulo.descripcion}</td>
            <td>${articulo.precio}</td></tr>`;
                    }
                    document.getElementById("tabla1").innerHTML = cad;
                });     
        }
    </script>

</body>

</html>