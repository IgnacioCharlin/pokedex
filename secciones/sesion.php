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
            header("Location: /pokedex/index.php?error=contrasena");
            exit();
        }
    }
    else {
        header("Location: /pokedex/index.php?error=usuarioNoEnContrado");
        exit();
    }
}

//echo $_SESION['nombre'];

if(isset($_SESSION['nombre'])){
    echo ("<h2>Bienvenido</h2>");
}else{
    echo ("<h2>No ingresas datos</h2>");
}

?>