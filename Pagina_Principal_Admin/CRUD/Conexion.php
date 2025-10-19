<?php
    function conectar(){
        $host = "localhost";
        $user = "root";
        $pass = "darko";
        $bd = "login_register_db";
        $conexion = mysqli_connect($host,$user,$pass);
        mysqli_select_db($conexion,$bd);

        return $conexion;
    }
?>