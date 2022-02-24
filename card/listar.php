<?php
 
date_default_timezone_set('America/Mexico_City');
    $dbconn = pg_connect("host=localhost dbname=fetch user=postgres password=123456")
    or die('No se ha podido conectar: ' . pg_last_error());
    $sentencia='SELECT url, comentario, fecha FROM url';
    //require "conexion.php";
    //$sentencia = $pdo->prepare("SELECT * FROM url ORDER BY id DESC");
   
    //$sentencia->execute();
    $result = pg_query($sentencia) or die('La consulta fallo: ' . pg_last_error());
    
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    
       
    foreach ($line as $row) {
        echo $row['comentario'];
        echo "<br>";
        
       

    
        }
        
        }
        

    
function time_ago ($fecha){
    $diferencia = time() - $fecha;
    if ($diferencia < 1) {  
        return 'Justo ahora';
    }
    $condicion = array(
        12 * 30 * 24 * 60 * 60  => 'año',
        30 * 24 * 60 * 60 => 'mes',
        24 * 60 * 60 => 'dia',
        60 * 60 => 'hora',
        60 => 'minuto',
        1 => 'segundo'
    );
    foreach ($condicion as $secs => $str) {
        $d = $diferencia / $secs;
        if ($d >= 1) {
            //redondear
            $t = round($d);
            return 'hace ' . $t. ' ' .$str. ($t > 1 ? 's' : '');
        }
    }
}
/*


            echo '<div class="col-md-4">

        <div class="card">
            <div class="card-header text-white bg-danger">
                Publicado: <strong>'.time_ago(strtotime($line['fecha'])). '</strong>
            </div>
            <div class="card-body">';
            echo '<img class="img-thumbnail" src="/prueba_4/card/';
            echo  $line['url']; 

            echo '" alt="" >
                <p>'.$line['comentario'].'</p>
                
                
            </div>
        </div>
    </div>';

*/
?>
