<?php 

    include 'Conexion_BE.php';

    $nombre_completo = $_POST['nombre_completo'];
    $boleta = $_POST['boleta'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    //Encriptar clave
    //$clave = hash('sha512', $clave);

    $query = "INSERT INTO usuarios(nombre_completo, boleta, usuario, clave) 
              VALUES('$nombre_completo','$boleta','$usuario','$clave')";
    //Verificar que la boleta no se repita en la base de datos
    $verificar_boleta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE boleta = '$boleta' ");
    if(mysqli_num_rows($verificar_boleta) > 0){
        echo'
            <script>
                alert("Esta boleta ya está registrado, intenta con una diferente");
                window.location = "../../Index.php";
            </script>
        ';
        exit(); //Termina con el script y el codigo restante no se ejecutará
    }

    //Verificar que la boleta no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
            <script>
                alert("Este usuario ya está registrado, intenta con uno diferente");
                window.location = "../../Index.php";
            </script>
        ';
        exit(); //Termina con el script y el codigo restante no se ejecutará
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo ' 
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../../Index.php";
            </script>
        ';
    }else{
        echo ' 
            <script>
                alert("Intentalo de nuevo, Usuario no almacenado exitosamente");
                window.location = "../../Index.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>