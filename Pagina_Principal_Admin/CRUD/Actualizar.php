<?php
    include("Conexion.php");
    $conexion = conectar();
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM usuarios WHERE ID = '$ID'";
    $query = mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../CSS/Estilos.css" rel="stylesheet">
        <link rel="icon" href="../Imagen/Logo-P.ico">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="principal">
            <div class="contenedor">
                <h3 class="titulo">Actualizacion de Datos</h3>
                <section class="form-update">
                    <h4>Actualiza tus datos</h4>
                    <form action="./Update.php" method = "POST">
                            <input class="controls" required = "" readonly type="text" placeholder="ID" name = "txtID" value = "<?php echo $row['ID']?>"><br><br>
                            <input class="controls" required = "" type="text" placeholder="Nombre completo" name = "txtnombre_completo" value = "<?php echo $row['nombre_completo']?>"><br><br>
                            <input class="controls" required = "" type="number" placeholder="Boleta" name = "txtboleta" value = "<?php echo $row['boleta']?>"><br><br>
                            <input class="controls" required = "" type="text" placeholder="Usuario" name = "txtusuario" value= "<?php echo $row['usuario']?>"><br><br>
                            <input class="controls" required = "" type="text" placeholder="Contraseña" name = "txtclave"  value = "<?php echo $row['clave']?>"><br><br>
                            <input class="controls" required = "" type="text" placeholder="Rol" name = "txtid_rol"  value = "<?php echo $row['id_rol']?>"><br><br>
                            <input class="botons" type="submit" name = "button" value = "Actualizar">
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>