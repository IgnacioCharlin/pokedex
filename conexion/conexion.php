<?php

$contraseña="";
$usuario="root";
$nombrebd="pokemon";
$bd='';


try {
    $bd = new PDO(
        'mysql:host=localhost;
			dbname='.$nombrebd,
        $usuario,
        $contraseña,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    echo "Error de conexión ".$e->getMessage();
}
?>
