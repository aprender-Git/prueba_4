<?php
session_start();

if (!$_SESSION['numero']) {
    $_SESSION['numero']=0;
}


if (isset($_GET['counter']) && $_GET['counter'] == 1) {
$_SESSION['numero']++;
}
if (isset($_GET['counter']) && $_GET['counter'] == 0) {
    $_SESSION['numero']--;
    }

?>
<h1>el valor de la sesion es <?=$_SESSION['numero']?></h1>

<a href="ejercicio1.php?counter=1">aumentar valor</a><br>
<a href="ejercicio1.php?counter=0">disminuir valor</a><br>



select titulo from entradas where  categoria_id 
in (select id from  categorias where nombre ='Accion'  );


select  count(categoria_id) from entradas GROUP BY categoria_id


select count(categoria_id), category_id from entradas GROUP BY 



SELECT nombre categoria  where (select COUNT(categoria_id) from entrada group by  categoria_id) >= 3;









select categoria_id, count(categoria_id) from entrada group by categoria_id having count(categoria_id)>=3
