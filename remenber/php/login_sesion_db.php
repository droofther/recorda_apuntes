<?php
session_start();

include 'conection_db.php';


$email = $_POST['email'];
$password = $_POST['password'];
$password = hash('sha512', $password);


$validar_sesion = mysqli_query($conection, "SELECT * FROM usuario WHERE correo = '$email' and clave = '$password'");


if(mysqli_num_rows($validar_sesion)>0){
    $_SESSION['usuario'] = $email;
    header("location: ../admin_tarea.php");
    exit;
}
else{
    echo'
    <script>
        alert("Este usuario no Existe");
        window.location = "../login.php";
    </script>
    ';
    exit;
}

?>