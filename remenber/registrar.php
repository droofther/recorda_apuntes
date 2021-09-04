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
    <title>Registrarse</title>
</head>

<body>
    <div class="user-container">
        <form action="./php/register_user_db.php" method="POST">

            <div class="formulario">
                <h2>Registrarse</h2>
                <input type="text" name="name" id="name" placeholder="Nombre Completo">
                <input type="text" name="email" id="email" placeholder="Tu Email">
                <input type="text" name="user" id="user" placeholder="Usuario">
                <input type="password" name="password" id="password" placeholder="Contraseña">
                <input type="password" id="password" placeholder="Confirmar Contraseña">
                <button>Guardar</button>
            </div>
        </form>
    </div>
</body>

</html>