<?php

if (isset($_COOKIE['micookie'])) {
   echo "<h1>".$_COOKIE['micookie']."</h1>";
}
if (isset($_COOKIE['unset'])) {
    echo "<h1>".$_COOKIE['unset']."</h1>";
 }
?>
<a href="index.php">crear galletas</a>
<a href="borrar.php">borrar galletas</a>