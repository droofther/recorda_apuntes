<?php
session_start();

if(!(isset($_SESSION['usuario']))){
    header("location: login.php");
    session_destroy();
    die();
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/global_style.css">
        <link rel="stylesheet" href="./css/form_add_note.css">
        <link rel="stylesheet" href="./css/card_note.css">
        <title>Remenber me</title>
    </head>

    <body>

        <div class="contenedor">
            <a href="php/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesion</a>
            <h1>Remember me</h1>


            <div class="add-tarea">
                <form action="./php/add_tarea_db.php" method="POST">
                    <h2>Agregar lista de tareas</h2>
                    <div class="formulario">
                        <input type="text" name="titulo" id="title" class="title" placeholder="Titulo">
                        <input type="text" name="tarea" id="description" placeholder="Tarea por Realizar"></input>
                        <input type="date" name="date" id="today" class="date" placeholder="Fecha">
                    </div>
                    <button>Agregar Tarea </button>
                </form>
            </div>
            <!--end formulario-->
            <!--START NOTE-->
        </div>
        <div class="text-info">
            <p>No hay nota agreagda.</p>
        </div>

        <div class="contenedor">
            <div class="content-note">
                <!--grid-body-->

            </div>

        </div>
        <!--END CODE-->


        <script src="./js/today/today.js"></script>
        <script src="./js/add_table/pintar_table.js"></script>
        <script src="./js/vew-text.js"></script>
    </body>

    </html>