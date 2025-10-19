<?php
function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "darko";
    $bd   = "login_register_db";

    $conexion = mysqli_connect($host, $user, $pass, $bd);

    if (!$conexion) {
        die("Error al conectar con MySQL: " . mysqli_connect_error());
    }

    return $conexion;
}
?>
