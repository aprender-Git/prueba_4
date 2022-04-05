<?php

function validarEmail($email){
$status = "no valido";
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $status=" valido ";
}
return $status;

}

if (isset($_GET['email'])) {
    echo validarEmail($_GET["email"]);
}
else {
    echo "pasa por el get email";
}