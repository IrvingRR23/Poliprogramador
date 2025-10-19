<?php 
include("Conexion.php");
$con=conectar();

$ID = $_POST['txtID'];
$nombre_completo = $_POST['txtnombre_completo'];
$boleta = $_POST['txtboleta'];
$usuario = $_POST['txtusuario'];
$clave = $_POST['txtclave'];
$id_rol = $_POST['txtid_rol'];

$sql="UPDATE `usuarios` SET `nombre_completo` = '$nombre_completo', `boleta` = '$boleta', `usuario` = '$usuario', `clave` = '$clave', `id_rol` = '$id_rol' WHERE `ID` = '$ID'";
$query = mysqli_query($con,$sql);
if($query){
    header("Location: ./Admin.php");
}else{
    header("Location: ./Actualizar.php");
}
?>