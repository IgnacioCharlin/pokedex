<?php
include_once('../conexion/conexion.php');


/* Subida de imagen a carpeta temporal funcionando*/
$id = $_POST['id'];
$nombre =$_POST['nombre'];
$tipo = $_POST['tipo'];
$nombre_imagen='';
if(isset($_FILES['img'])){
    var_dump($_FILES['img']);
    $foto=$_FILES["img"]["name"];
    $ruta=$_FILES["img"]["tmp_name"];
    $destino='../img/'.$nombre.'.svg';
    $nombre_imagen = 'img/'.$nombre.'.svg';
    move_uploaded_file($ruta, $destino);
}else{
    $nombre_imagen = $_POST['img'];
}

$sentencia = $bd->prepare("INSERT INTO pokemon (id , imagen , nombre ,tipo) VALUES ($id,'$nombre_imagen','$nombre','$tipo')");
$resultado = $sentencia->execute();

if($resultado){
    header('location: ../index.php');
}



?>


