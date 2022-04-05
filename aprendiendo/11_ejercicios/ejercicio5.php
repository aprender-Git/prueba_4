<?php
//todos lo numero esntrre dos por get
if(isset($_GET['numero1']) && isset( $_GET['numero1']  )){

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if ($numero1<$numero2) {
    for ($i=$numero1; $i <=$numero2 ; $i++) { 
        echo "<h1>$i</h1>";
        }
} else {
 echo "1 menos doas mayor";
}


}else {
    echo "echo no exist";
}



?>