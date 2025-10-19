<?php
    include("Conexion.php");
    $conexion = conectar();

    // 🔧 Corrección: quitamos el fetch que se saltaba la primera fila
    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliprogramador</title>
    <link rel="stylesheet" href="../CSS/Estilos.css">
    <link rel="icon" href="../Imagen/Logo-P.ico">
</head>

<body>

    <header>
        <div class="contenedor">
            <img src="../Imagen/logo.png" alt="fondo" class="imglogo">
            <h2 class="LogoT">Poliprogramador Admin.</h2>
            <nav>
                <a href="#" class="activo">Inicio</a>
                <a href="../Lenguajes/C/LenguajeC.html">Lenguaje C</a>
                <a href="../Lenguajes/Java/Lenguaje_Java.html">Java</a>
                <a href="../Lenguajes/Python/Lenguaje_Python.html">Python</a>
                <a href="../ChatBot/ChatBot.html">ChatBot</a>
                <a href="../Comentarios/Comentarios.html">Comentarios</a>
                <a href="../../Login-Register/PHP/Cerrar_Sesion.php">Cerrar Sesion</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="principal">
            <div class="contenedor">
                <h3 class="titulo">Tabla de usuarios</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Boleta</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                            <th>Editar información</th>
                            <th>Eliminar usuarios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php echo $row['ID'];?></th>
                            <th><?php echo $row['nombre_completo'];?></th>
                            <th><?php echo $row['usuario'];?></th>
                            <th><?php echo $row['boleta'];?></th>
                            <th><?php echo $row['clave'];?></th>
                            <th><?php echo $row['id_rol'];?></th>
                            <th><a class="neon" href="./Actualizar.php?ID=<?php echo $row['ID'] ?>">Editar</a></th>
                            <th><a class="neonE" href="./Eliminar.php?ID=<?php echo $row['ID'] ?>">Eliminar</a></th>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>

</html>
