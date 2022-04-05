<?php
/*
cookies : es un fichero que se guarda en el almacenamienti del ordenador del usuario
*/

//setcookie("nombre", "", caducida, ruta, dominio);

setcookie("micookie","valor de mi galleta");
//con expiracion
setcookie("unset", "valor de la cookie de 365 dias", time()+(60*60*24*365))

?>
<a href="ver_cookies.php">galletas </a>
