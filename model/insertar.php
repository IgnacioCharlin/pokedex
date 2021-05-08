<?php
include_once('../conexion/conexion.php');


$sentencia = $bd->prepare("INSERT INTO pokemon (id , imagen , nombre ,tipo) VALUES (3,'imagen.jpg','Mariano','Perri')");
$resultado = $sentencia->execute();

$sentencia2 = $bd ->prepare("DELETE FROM pokemon");
$resultado2 = $sentencia2 ->execute();

if ($resultado) {
    echo "Insertado Correctamente";
    header('Location: ../index.php');
}else{
    echo "Ocurrio un error al insertar";
}

/*
$nombre_imagen = $_FILES['imagen']['name'];
$tipo_imagen = $_FILES['imagen']['type'];
$tamaño_imagen = $_FILES['imagen']['size'];

// ruta de la carpeta destino al servidor
$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/pokedex/img-temporal/';

//Movemos la imagen del directorio temporal al directorio escogido
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);


$query = $conexion -> query("INSERT INTO pokemon (id,imagen,nombre,tipo)values(1,'$nombre_imagen','JUAN','HIERVA')");
if($query){
    echo('subio correctamente');
}else{
    echo ('no se pudo subir');
}
$sql = "delete from pokemon";
$consulta = mysqli_query($conexion, $sql);
$nfilas = mysqli_num_rows($consulta);
echo $nfilas;
while($fila = mysqli_fetch_assoc($consulta)) {
    print_r($fila);
}
*/

?>


