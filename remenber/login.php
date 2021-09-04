<?php

if(isset($_SESSION['usuario'])){
    header("location: admin_tarea.php");
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
    <link rel="stylesheet" href="./css//validar_usuario/stillos.css">
    <title>Login</title>
</head>

<body>

    <div class="user-container">
        <form action="php/login_sesion_db.php" method = "POST">

            <div class="formulario">
                <h2>Iniciar Sesion</h2>
                <input type="email" name="email" id="email" placeholder="Tu Email">
                <input type="password" name="password" id="password" placeholder="Tu password">
                <button>Acceder</button>
                <a href="./registrar.php">Registrate aqui</a>
            </div>
        </form>
    </div>
</body>

</html>