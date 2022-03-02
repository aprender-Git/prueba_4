<?php
namespace PlainObjets;//creacion de un sobre nombre de espacio
//creacion de  la clase
class PlainObjets{
    //propiedades 
    private $id = 0;
    private $nombrePais = "";

    //creacion de metodos o funciones getter y setter.

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNombrePais(){
        return $this->nombrePais;
    }
    public function setNombrePais($nombrePais){
        $this->nombrePais = $nombrePais;
    }

}//termina la clase

?>