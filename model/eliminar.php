<?php
    include_once ('../conexion/conexion.php');

    if(isset($_GET['id'])){
        $id=  $_GET['id'];
        $sentencia = $bd->prepare("DELETE FROM pokemon WHERE id=$id");
        $resultado = $sentencia->execute();
        header('location:../index.php');
    }else{
        header('location:../index.php');
    }

?>