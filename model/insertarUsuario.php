<?php
session_start();

if( $_SESSION["isLogin"] ){
    header("location:/pokedex/index.php");
    exit();
}

include ("../conexion/conexion.php");


    if (isset($_POST["usuario"]) ) {
        if ($_POST["password"] == $_POST["rePassword"]) {
            $usuario = strtolower($_POST['usuario']);
            $pass= strtolower($_POST['password']);
            $sentencia = $bd->prepare("INSERT INTO usuarios (nombre , password) VALUES ( '$usuario','$pass' )");
            $resultado = $sentencia->execute();

            $_SESSION["isLogin"] = true;

            if ($resultado) {
                echo "Insertado Correctamente";
                header('Location: ../index.php');
            }else{
                var_dump($resultado);
                echo "Ocurrio un error al insertar";
            }

        }

    }
    else {
        header("Location: /pokedex/secciones/registrar.php");
    }


?>