<?php

/*
class Person{
    private $name="";

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name =$name;
    }
}//termina la clase person 
$person =new Person();
//$person->name="victor";
$person->setName("::");
echo $person->getName();

class Employee extends Person{
    private $salary = 0 ;
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }

}//termina clase employee

$employee = new Employee();

$employee->setName(":::");
$employee->setSalary(0);

echo $employee->getName();
echo $employee->getSalary();


?>


<?php
class Carro {
    private $nombre   = "";
    private $marca    = "";
    private $precio   = 0;
    
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre =$nombre;

    }


}

$newcar = new Carro();

$newcar->setNombre("fabian en capacitacion");
echo "<br>";

echo $newcar->getNombre();


class Autopartes extends Carro {

    private $parte   = "";
  
    public function getParte(){
        return $this->parte;
    }
    public function setParte($parte){
        $this->parte =$parte;

    }

}
echo "<br>";

$partes = new Autopartes();
$partes->setNombre("fabian");
$partes->setParte("parte1");
echo "<br>";

echo $partes->getNombre();
echo $partes->getParte();


//se crea una clase para los objetos ...
class Fruit{
    //aqui vas los objetos de la clase
    //propiedades
    public $name;
    public $color;

    //methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }


}

//creacion de la instancia de objetos de la clase
$apple = new Fruit();
$banana = new Fruit();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$apple->set_name('manzana obj');
$banana->set_color('rojo obj');

echo "nombre : ".$apple->get_name();
echo "<br>";
echo "color : ".$banana->get_color();

echo "<br>";
echo "<br>";
echo "<br>";
echo $apple->name;
class Fruta {
    public $name;
}
$apple = new Fruta();
$apple->name ="apple";
echo "<br>";
echo "<br>";
echo "<br>";
echo $apple->name;


$apple = new Fruta();
var_dump($apple instanceof Fruta);

class Frutas{
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }

}
$frutas = new Frutas("manzanas", "rojo");
echo "<br>";
echo "<br>";
echo "<br>";
echo $frutas->get_name();
echo "<br>";
echo $frutas->get_color();


class Fruit_destruct{
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "the fruit_destruct is {$this->name} y color es {$this->color}.";
    }
}
$apple = new Fruit_destruct("apple", "rojo");

class Fruit_modificadores{
    public $name;
    protected $color;
    private $peso;
}
$mango = new Fruit_modificadores();
$mango->name ='mango';
$mango->color='amarillo';
$mango->peso='300'; 

class Fruit_MODIFICADORES_ACCESO2{
    public $name;
    protected $color;
    private $peso;

    function set_name($n){
        $this->name=$n;
    }
    protected function set_color($n){
        $this->color=$n;
    }
    private function set_peso($n){
        $this->peso=$n;
    }
}
$mango = new Fruit_MODIFICADORES_ACCESO2();
$mango->set_name('mango');
$mango->set_color('amrillo');
$mango->set_peso('300');*/

/*

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    public function intro(){
        echo "the fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Stranwberry extends Fruit{
    public function message(){
        echo "akmm i a fruit or berry";
    }
}

$strawberry = new Stranwberry("straberry", "red");
$strawberry->message();
$strawberry->intro();

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    protected function intro(){
        echo "the fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Stranwberry extends Fruit{
    public function message(){             
        echo "akmm i a fruit or berry";
        $this->intro();
    }
}

$strawberry = new Stranwberry("straberry", "red");
$strawberry->message();
//$strawberry->intro();


class Goodbye{
    const deje_mensaje ="gracias por visitar w3Schools.com !";
    public function bye(){
        echo self::deje_mensaje;
    }
}
echo "<br>";
//echo Goodbye::deje_mensaje;
$goodbye = new Goodbye();
$goodbye->bye();



abstract class Car {
    public $name;
    //clase padre
    public function __construct($name)
    {
        $this->name=$name;
    }
    abstract public function intro():string;
}
//clase hija
class Audi extends Car {

    public function intro() : string{
        return "choose German quality ! iàm a $this->name";
    }
}
class Volvo extends Car {

    public function intro() : string{
        return "Proud to be Swedish! I'm a $this->name!";
    }
}
class Citroe extends Car {

    public function intro() : string{
        return "French extravagance! I'm a $this->name!";
    }
}

$audi= new Audi("audi");
echo $audi->intro();
echo "<br>";*/











/*

class Fruit{
    //properties
    public $name;
    public $color;
    //methods
    function set_name($n){
        $this->name=$n;
     }
     function get_name(){
         return $this->name;
     }
}
$mostrar_manzana = new Fruit();
$mostrar_pera = new Fruit();

$mostrar_pera->set_name('pera');
$mostrar_manzana->set_name('manzana');

echo $mostrar_pera->get_name();
echo "<br>";
echo $mostrar_manzana->get_name();
echo "<br>";
*/
//--------------------crear una clase llamada persona 
//--------------------crear dentro de la clase persona las propiedades nombre, edad, genero
//--------------------crear los set y get de las propiedades 
//--------------------crear una instancia de los objetos de la clase persona 
//--------------------setear un objeto persona con los datos francisco favian + edad 22 + genero masculino 
//--------------------mostrar los resultados con get.. 

//write here now let's go...
/*
class persona{
    public $nombre;
    public $edad;
    public $genero;

    function set_nombre($nombre){
        $this->nombre=$nombre;
    }
    function get_nombre(){
        return $this->nombre;
    }

    function set_edad($edad){
        $this->edad=$edad;
    }
    function get_edad(){
        return $this->edad;
    }

    function set_genero($genero){
        $this->genero= $genero;
    }
    function get_genero(){
        return $this->genero;
    }

}
$mostrar_nombre= new persona();
$mostrar_edad= new persona();
$mostrar_genero= new persona();

$mostrar_nombre->set_nombre('Francisco Fabian');
$mostrar_edad->set_edad(22);
$mostrar_genero->set_genero('Masculino');

echo "Hola mi nombre es : ".$mostrar_nombre->get_nombre();
echo "<br>";
echo "tengo : ".$mostrar_edad->get_edad(). " de edad";
echo "<br>";
echo "el genero al que pertenesco es : ".$mostrar_genero->get_genero();




class Fruit {
    //properties
    public $name;
    function set_name($n){
        $this->name=$n;
    }
}
$apple = new Fruit();
$apple->set_name("apple");
echo $apple->name;



class Fruit2{
    public $name;
}
$apple = new Fruit2();
$apple->name="Apple";
echo $apple->name;

echo "<br>";

$apple = new Fruit();
var_dump($apple instanceof Fruit);




class Fruit {
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }

}
$apple = new Fruit("manzana", "rojo");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();




class fruit{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    function __destruct()
    {
        echo"La fruta es {$this->name} y su color es {$this->color}.";
    }
}


$manzana= new fruit("Manzana","rojo");

class Fruit {
    public $name;
    protected $color;
    private $peso;
    function set_color($n){
        $this->color=$n;
    }
    function set_peso($n){
        $this->peso=$n;
    }
}
$mango = new Fruit();
$mango->name = "mango";
$mango->set_color('amarillo');
//$mango->peso="300";
$mango->set_peso(200);


class Goodbye{
    const LLEVO_MSJ= "Gracias pòr visitar W3schools.com";

}
echo Goodbye::LLEVO_MSJ;

class Dos{
    const MSJ="HOLA MUNDO";
public function bye(){
    echo self::MSJ;
}

}
$instanciaDos= new Dos();
$instanciaDos->bye();


interface Animal{
    public function MakeSound();
}
class Gato implements Animal{
    public function MakeSound(){
        echo "miau";
        echo "<br>";

    }
}
class Perro implements Animal{
    public function MakeSound()
    {
        echo "wau";
        echo "<br>";

    }
}
$animal = new Gato();
$animal2 = new Perro();
$animales = array($animal, $animal2);

foreach ($animales as $fila ) {
    $fila->MakeSound();
}




trait Rasgos_nombre{  
    public function msj(){
        echo "oop is fun!!";
    }
}


class Myclass{
    use Rasgos_nombre;
}

$obj =new Myclass();
$obj->msj();

trait Rasgos_animal{
    public function msi(){
        echo "me estoy muriendo";
    } 
}

class Miclase{
    use Rasgos_animal;
}

$obj = new Miclase();
$obj-> msi();





class ClassName{
    public static function staticMethod(){
        echo "hola mundo !!";
    }
}
ClassName::staticMethod();



class Covid{
    public static function hola(){
        echo "hola";
    }
}

Covid::hola()

class greeting{
    public static function bienvenido(){
        echo "Hola mundo";
    }
    public function __construct(){
        self::bienvenido();
    }
}
    new greeting();


class dominio{
    protected static function sitioWeb(){
        return "W3Schools.com";
    }
}
class dominioW3 extends dominio{
    public $nombreSitio;
    public function __construct(){
        $this->nombreSitio = parent::sitioWeb();
    }
}

$dominioW3 =new dominioW3;
echo $dominioW3-> nombreSitio;


class ClassName{
    public static $staticProp = " w3schools ";
}
echo ClassName::$staticProp;
*/

//echo "hola mundo";
namespace Html;
class Table{
    public $title   = "";
    public $numRows = 0;

    public function message(){
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title ="my table";
$table->numRows =5;
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $table->message();
    ?>
</body>
</html>