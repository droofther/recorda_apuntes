<?php

/*Eliminar DATOS A LA TABLA  */

session_start();
include 'conection_db.php';


if (isset($_GET['deleteid'])){
    $id = $_GET[ 'deleteid'];
    mysqli_query($conection ,"DELETE FROM tareas WHERE id = $id");
    header("location: ../admin_tarea.php");
}

?>

