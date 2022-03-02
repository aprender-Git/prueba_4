<?php
namespace OBJETOS;
class MascotaPO 
{
//creacion de propiedades o campos
private $id                 = 0;
private $nombre             = "";
private $sexo               = "";
private $tipo               = "";
private $raza               = "";
private $pais               = "";
private $estado             = "";
private $ciudad             = "";
private $codigoPostal       = "";      
private $latitud            = "";
private $longitud           = ""; 
private $rasgosParticulares = "";            
private $fechaEncontrado    = "";        
private $color              = "";
private $usuarioPublico     = "";         
private $folio              = "";
private $estatus            = 0;  
private $queryGen           ="";

//creacion de setter y getter

public function setId($id){
    $this->id = $id;
}
public function getId(){
    return $this->id;
}
public function setNombre($nombre){
    $this->nombre = $nombre;
}
public function getNombre(){
    return $this->nombre;
}
public function setSexo($sexo){
    $this->sexo = $sexo;
}
public function getSexo(){
    return $this->sexo;
}
public function setTipo($tipo){
    $this->tipo= $tipo;
}
public function getTipo(){
    return $this->tipo;
}
public function setRaza($raza){
    $this->raza = $raza;
}
public function getRaza(){
    return $this->raza;
}
public function setPais($pais){
    $this->pais = $pais;
}
public function getPais(){
    return $this->pais;
}
public function setEstado($estado){
    $this->estado = $estado;
}
public function getEstado(){
    return $this->estado;
}
public function setCiudad($ciudad){
    $this->ciudad = $ciudad;
}
public function getCiudad(){
    return $this->ciudad;
}
public function setCodigoPostal($codigoPostal){
    $this->codigoPostal = $codigoPostal;
}
public function getCodigoPostal(){
    return $this->codigoPostal;
}
public function setLatitud($latitud){
    $this->latitud = $latitud;
}
public function getLatitud(){
    return $this->latitud;
}
public function setLongitud($longitud){
    $this->longitud = $longitud;
}
public function getLongitud(){
    return $this->longitud;
}
public function setRasgosParticulares($rasgosParticulares){
    $this->rasgosParticulares= $rasgosParticulares;
}
public function getRasgosParticulares(){ 
return $this->rasgosParticulares;
}
public function setFechaEncontrado($fechaEncontrado){
$this->fechaEncontrado = $fechaEncontrado;
}
public function getFechaEncontrado(){
    return $this->fechaEncontrado;
}
public function setColor($color){
    $this->color =$color;
}
public function getColor(){
    return $this->color;
}
public function setUsuarioPublico($usuarioPublico){
    $this->usuarioPublico = $usuarioPublico;
}
public function getUsuarioPublico(){
    return $this->usuarioPublico;
}

public  function setFolio($folio){
    $this->folio = $folio;
}
public function getFolio(){
    return $this->folio;
}
public function setEstatus($estatus){
    $this->estatus = $estatus;
}
public function getEstatus(){
    return $this->estatus;
}
public function setQueryGen($queryGen){
    $this->queryGen = $queryGen;
}
public  function getQueryGen(){
    return $this->queryGen;
}

}//clase ends

?>