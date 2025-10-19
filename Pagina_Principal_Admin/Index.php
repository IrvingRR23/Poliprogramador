<?php 
    session_start();
    //include("Conexion_BE.php");
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor Inicia Sesion");
                window.location = "../Login-Register/Index.php";
            </script>
        ';
        session_destroy(); //Muere el inicio de sesion
        die(); //Aqui muere codigo
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliprogramador</title>
    <link rel="stylesheet" href="CSS/Estilos.css">
    <link rel="icon" href="./Imagen/Logo-P.ico">
</head>

<body>

    <header>
        <div class="contenedor">
            <img src="Imagen/logo.png" alt="fondo" class="imglogo">
            <h2 class="LogoT">Poliprogramador Admin.
            </h2>
            <nav>
                <a href="#" class="activo">Inicio</a>
                <a href="./Lenguajes/C/LenguajeC.html">Lenguaje C</a>
                <a href="./Lenguajes/Java/Lenguaje_Java.html">Java</a>
                <a href="./Lenguajes/Python/Lenguaje_Python.html">Python</a>
                <a href="./ChatBot/ChatBot.html">ChatBot</a>
                <a href="./Comentarios/Comentarios.html">Comentarios</a>
                <a href="../Login-Register/PHP/Cerrar_Sesion.php">Cerrar Sesion</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="principal">
            <div class="contenedor">
                <h3 class="titulo">Lenguaje de Programación</h3>
                <p class="descrip">Un lenguaje de programación es una forma de comunicarnos con una computadora, tablet
                    o celular e indicarle qué queremos hacer.
                    Existen distintos tipos de lenguaje: principalmente de bajo nivel y de alto nivel. La diferencia se
                    encuentra en lo cerca o lejos que estemos del hardware de nuestro equipo. Esta cercanía tiene que
                    ver con el control que tengamos sobre el dispositivo, placa o controlador.
                    Encontramos diferentes lenguajes como C, Java, Python, entre otros.
                </p>
                
                <button role="button" class="boton"><i class="fas fa-play"></i><a href="https://youtu.be/pWw4UtQhdek" target="_blank">¿Qué es un lenguaje de programación?</a></button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i><a href="https://www.escom.ipn.mx/" target="_blank">ESCOM</a></button>
            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>

</html>