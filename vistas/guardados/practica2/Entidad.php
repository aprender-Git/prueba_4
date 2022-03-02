<?php
namespace ENTIDAD;
include_once "plainObjects.php";
use PlainObjets\PlainObjets;
class Entidad{

    //creacion de un campo
    private $POobjetos="";
    //creacion de un constructor para la inicializacion
    //de la creacion de los objetos planos de dicha clase
    public function __construct(){
        $this->POobjetos = new PlainObjets;
    }
    //creacion de getPO para retornar los metodos que estan dentro de poobjetos de la clase.
    public function getPO(){
        return $this->POobjetos;
    }

    // creacion metodos o funciones del sistema
    //trae los datos de pais y los setea 
    public function select_pais(){
        include_once "Conexion.php";
        
        $query = sprintf("SELECT id, nombre_ciudad FROM ciudad");
         $consulta = pg_query($cnx, $query);

        $result = false;
        $datos =['1','2','tres',0];

        if ($consulta != false) {
            $result =array();

          /* if(pg_numrows($consulta)>0){
              while ($key= pg_fetch_row($consulta)) {
                //echo print_r($key);
                $PO = new PlainObjets;
                $PO->setId($key[0]);
                $PO->setNombrePais($key[1]);

                $result[]=$PO;
              }

           }*/
        }


        return $result;

    }

}

?>