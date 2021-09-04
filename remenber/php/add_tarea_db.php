<?php

/*INSERTAR DATOS A LA TABLA  */

session_start();
include 'conection_db.php';


$titulo = $_POST['titulo'];
$tarea = $_POST['tarea'];
$date = $_POST['date'];

$intsertar_tarea = "INSERT INTO tareas (titulo, tarea, fecha) VALUES ('$titulo', '$tarea', '$date')";

$add_tarea = mysqli_query($conection, $intsertar_tarea);
if($add_tarea){

    header("location: ../admin_tarea.php");
}
