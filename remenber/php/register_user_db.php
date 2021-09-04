<?php
include 'conection_db.php';


$name = $_POST['name'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$query = "INSERT INTO usuario (nombre_completo,correo,usuario, clave) VALUES ('$name','$email','$user','$password')";
$validar_registro = mysqli_query($conection, "SELECT * FROM usuario WHERE correo = '$email' or usuario = '$user'");


if(mysqli_num_rows($validar_registro)>0){
    echo'
    <script>
        alert("Ya este Email o Usuario Existe\n Intente con otras credenciales");
    </script>
    ';
    header("location: ../registrar.php");
    exit;
}

$ejecutar = mysqli_query($conection, $query);


if ($ejecutar){

    echo'
    <script>
        alert("Se ha registrado exitosamente");
    </script>
';
header("location: ../login.php");
exit;
}

mysqli_close($conection)
?>