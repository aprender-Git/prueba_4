
#


#mostrar los usuarios que se crearon un martes :

select * from usuarios where id in (select usuario_id from entradas where dayofweek(fecha)=3)


#mostrar el nombre de el usuario que tengas mas entradas
SELECT concat(nombre.' '.apellidos) as 'el user con mas entradas' nombre FROM usuarios where id =
(SELECT COUNT(id) from entradas group by usuario_id order by COUNT(id) desc limit 1=
#mostrar las categorias sin  entradas

select * from categorias where usuario_id
not in (SELECT categoria_id from entradas)


/*
consulta multitabla 
son consultas qur sirben para consultar varias tablas en una sola

*/

select e.titulo, u.nombre, c.nombre 
from entradas e, usuario u , categorias c
where e.usuario_id= u.id and e.categoria_id = c.id


