<?php
    include_once ('../conexion/conexion.php');
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $foto=$_FILES["img"]["name"];
    $ruta=$_FILES["img"]["tmp_name"];
    $destino='../img/'.$nombre.'.svg';
    $imagen = 'img/'.$nombre.'.svg';
    move_uploaded_file($ruta, $destino);


    $sentencia = $bd->prepare("UPDATE pokemon SET nombre ='$nombre',tipo='$tipo',imagen ='$imagen' WHERE id=$id");
    $resultado = $sentencia->execute();

    if ($resultado){
        header('location:../index.php');
    }

?>