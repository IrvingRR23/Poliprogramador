<?php
    include("Conexion.php");
    $conexion = conectar();
    $ID = $_GET['ID'];
    $sql = "DELETE FROM usuarios WHERE ID = '$ID'";
    $query = mysqli_query($conexion,$sql);
    if($query){
        header("Location: Admin.php");
    }
?>