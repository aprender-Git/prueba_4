<?php
/**
 * ob†ener dos numeros con el parametro url y hacer todas la las operaciones basicas +-*%/
 * 
 */

 if(isset($_GET['numero1']) && isset( $_GET['numero1']  )){
    $num1= $_GET['numero1'];
    $num2= $_GET['numero2'];
    echo "suma".($num1+$num2)."<br>";
    echo "resta".($num1-$num2)."<br>";
    echo "mul".($num1*$num2)."<br>";
    echo "div".($num1/$num2)."<br>";


 }else{
     echo "vacio";
 }


?>