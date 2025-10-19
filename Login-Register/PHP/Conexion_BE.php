<?php 
//Conexion a la base de datos
$conexion = mysqli_connect("localhost","root","darko","login_register_db");

/* Prueba de funcionalidad */
if($conexion){
    echo'Conectado con la base de datos, Exito';
}else{
    echo'Conectado con la base de datos, Fracaso';
}

?>