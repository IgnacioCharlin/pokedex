<?php
include_once('../conexion/conexion.php');


/* Subida de imagen a carpeta temporal funcionando*/
$id = 1;
$nombre =$_POST['nombre'];
$tipo = $_POST['tipo'];
$nombre_imagen = $_POST['img'];
//$tipo_imagen = $_FILES['imagen']['type'];
//$tamaño_imagen = $_FILES['imagen']['size'];

// ruta de la carpeta destino al servidor
//$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/pokedex/img-temporal/';

//Movemos la imagen del directorio temporal al directorio escogido
//move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);


$sentencia = $bd->prepare("INSERT INTO pokemon (id , imagen , nombre ,tipo) VALUES ($id,'$nombre_imagen','$nombre','$tipo')");
$resultado = $sentencia->execute();

if ($resultado) {
    echo "Insertado Correctamente";
    header('Location: ../index.php');
}else{
    echo "Ocurrio un error al insertar";
}



?>


