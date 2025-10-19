<?php

    session_start();

    include 'Conexion_BE.php';

    $boleta = $_POST['boleta'];
    $clave = $_POST['clave'];
    //Para clave encriptada
    //$clave = hash('sha512', $clave);


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 
    boleta = '$boleta' and clave = '$clave'");

    $validar_rol = mysqli_fetch_array($validar_login);

    if(mysqli_num_rows($validar_login) > 0){
        if($validar_rol['id_rol'] == 0){
            $_SESSION['usuario'] = $boleta;
            header("location: ../../Pagina_Principal/Index.php");
            exit(); 
        }else{
            $_SESSION['usuario'] = $boleta;
            header("location: ../../Pagina_Principal_Admin/CRUD/Admin.php");
            exit(); 
        } 
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique sus datos :(");
                window.location = "../../Index.php";
            </script>
        ';
        exit(); 
    }
?>
