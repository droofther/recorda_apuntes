
<?php

/*SELECIONAR LA TABLA Y CONVERTIRLA EN FORMATO .JSON  */

include 'conection_db.php';

$query = " SELECT id, titulo, tarea, fecha FROM tareas";
$resultado = mysqli_query($conection, $query);
$datos =mysqli_fetch_all($resultado, MYSQLI_ASSOC);
 


if(!empty($datos)){
    /*SI NO HAY DATOS */
    echo json_encode($datos);
}else {
    /*SI HAY DATOS ALOJARLO EN UN ARRAY */
    echo json_encode([]);
}
