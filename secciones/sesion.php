<?php
session_start();
include_once ("../conexion/conexion.php");

$sentencia = $bd->query("SELECT * FROM usuarios");
$sentencia->execute();
$usuarios =  $sentencia->fetchAll(PDO::FETCH_OBJ);

foreach ($usuarios as $usuario){
    if ($usuario->nombre == $_POST['nombre']){
        if ($usuario->password == $_POST['contraseña'] ){
            $_SESSION["isLogin"] = true;
             header("Location: /pokedex");
            exit();
        }
        else {
            header("Location: /pokedex/index.php?error=userPass");
            exit();
        }
    }
    else {
        header("Location: /pokedex/index.php?error=userPass");
        exit();
    }
}

?>