<?php

include 'conection_db.php';

$id = $_POST['update'];
/* */
$update = "UPDATE tareas SET titulo = value , tarea= value, fecha = value WHERE id_tarea =  ";

$ejecutar = mysqli_query($conection, $query);