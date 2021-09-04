<?php

/*UPDATE DATOS A LA TABLA  */

session_start();
include 'conection_db.php';



if (isset($_GET['updateid'])){
    $id = $_GET[ 'updateid'];
    mysqli_query($conection ,"UPDATE FROM tareas WHERE id = $id");
    header("location: ../admin_tarea.php");
}

?>

