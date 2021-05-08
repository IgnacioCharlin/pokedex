<?php
session_start();

$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['contraseña'] = $_POST['contraseña'];

//echo $_SESION['nombre'];

if(isset($_SESSION['nombre'])){
    echo ("<h2>Bienvenido</h2>");
}else{
    echo ("<h2>No ingresas datos</h2>");
}
/*
<input type="text" placeholder="Usuario" name="nombre">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
*/

echo $_SESSION['contraseña'];


//echo ($_SESION['nombre']);
//echo ($_SESION['contraseña']);
//echo($_POST['nombre']);
//echo($_POST['contraseña']);
?>