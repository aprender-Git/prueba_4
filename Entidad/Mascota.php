<?php
include_once "../ObjetosPlanos/MascotasPO.php";
include_once "../Conexion/Conexion.php";
class mascotas
{
private  $POmascotas= "";
//creacion del constructor
public function __construct(){
    $this->POmascotas = new MascotaPO();
}
//creacion de get para retornar matodos
public function getPO(){
    return $this->POmascotas;
}
//creacion de metodos o funciones
public function select(){  
   $conexion = new conector_pg();
   $query = sprintf("SELECT id, nombre, sexo, id_tipo, id_raza,  id_pais, id_estado, id_ciudad, cp,latitude,   longitude,rasgos_particulares,fecha_encontrado, color, id_usuario_publico,  folio_extravio, id_status   
                     FROM mascota 
                     WHERE id_status =2");
    $res=$conexion->consultar($query);
    $result = false;
    if ($res != false) {
        $result = array();
        if (pg_numrows($res)>0) {
            while ($fila = pg_fetch_row($res)) {
                //creacionde de la instancia del objeto //
                //print_r($fila);echo "<br><br>";
                $obj = new MascotaPO();
                $obj->setId($fila[0]);
                $obj->setNombre($fila[1]);
                $obj->setSexo($fila[2]);
                $obj->setTipo($fila[3]);
                $obj->setRaza($fila[4]);
                $obj->setPais($fila[5]);
                $obj->setEstado($fila[6]);
                $obj->setCiudad($fila[7]);
                $obj->setCodigoPostal($fila[8]);
                $obj->setLatitud($fila[9]);
                $obj->setLongitud($fila[10]);
                $obj->setRasgosParticulares($fila[11]);
                $obj->setFechaEncontrado($fila[12]);
                $obj->setColor($fila[13]);
                $obj->setUsuarioPublico($fila[14]);
                $obj->setFolio($fila[15]);
                $obj->setEstatus($fila[16]);
              $result[]=$obj;
            }//fin while
          }//fin conficion filas
    }//fin if
return $result;    
}//fin de metodo select 

}//class ends
?>