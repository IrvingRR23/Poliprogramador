<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: ../Pagina_Principal/Index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliprogramador</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,
    100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="./Login-Register/CSS/Estilos_LR.css">
    <link rel="icon" href="./Login-Register/Imagenes/Logo-P.ico">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Inicio de Sesion y registro-->
                <div class="contenedor__login-register">
                    <!--Inicio de Sesion-->
                    <form action="./Login-Register/PHP/Login_user_BE.php" method = "POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <!-- <input type="text" placeholder="Correo Electronico">-->
                        <input required = "" maxlength = '10' type="number" placeholder="Boleta" name = "boleta">
                        <input required = "" type="password" placeholder="Contraseña" name = "clave" id = "login">
                        <input type="button" name = "button" onclick = "mostrarLogin()" value = "Ver Clave">
                        <button>Entrar</button>
                    </form>

                    <!--Registro-->
                    <form action="./Login-Register/PHP/Registro_User_BE.php" method = "POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input required = "" type="text" placeholder="Nombre completo" name = "nombre_completo">
                        <input required = "" maxlength = '10' pattern = "[0-9]+" type="number" placeholder="Boleta" name = "boleta">
                        <input required = "" type="text" placeholder="Usuario" name = "usuario">
                        <input required = "" type="password" placeholder="Contraseña" name = "clave" id = "registro">
                        <input required = "" type="button" name = "button" onclick = "mostrarRegistro()" value = "Ver Clave">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="./Login-Register/JS/Script.js"></script>
        <script type = "text/javascript">
            function mostrarLogin(){
                var tipo = document.getElementById("login");
                if(tipo.type == 'password'){
                    tipo.type = 'text';
                }else{
                    tipo.type = 'password';
                }
            }

            function mostrarRegistro(){
                var tipo = document.getElementById("registro");
                if(tipo.type == 'password'){
                    tipo.type = 'text';
                }else{
                    tipo.type = 'password';
                }
            }
        </script>
</body>
</html>