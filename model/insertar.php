<?php
include_once('../conexion/conexion.php');


/* Subida de imagen a carpeta temporal funcionando*/
$id = $_POST['id'];
$nombre =$_POST['nombre'];
$tipo = $_POST['tipo'];
$nombre_imagen = $_POST['img'];

$sentencia = $bd->prepare("INSERT INTO pokemon (id , imagen , nombre ,tipo) VALUES ($id,'$nombre_imagen','$nombre','$tipo')");
$resultado = $sentencia->execute();



?>


