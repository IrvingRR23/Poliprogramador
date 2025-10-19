<?php
include("Conexion_BE.php"); // Usa la misma conexión que tu login

if ($conexion) {
    echo "<h2 style='color: green;'>Conectado correctamente a MySQL</h2>";
} else {
    echo "<h2 style='color: red;'> Error al conectar a MySQL: " . mysqli_connect_error() . "</h2>";
}
?>
