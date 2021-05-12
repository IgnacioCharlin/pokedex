<?php
include_once('../conexion/conexion.php');


/* Subida de imagen a carpeta temporal funcionando*/
//$id = $_POST['id'];
$nombre =$_POST['nombre'];
$tipo = $_POST['tipo'];
$nombre_imagen = $_FILES['imagen'];

$sentencia = $bd->prepare("SELECT MAX(id) as id FROM pokemon");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);


foreach ($resultado as $res){
    $id= ($res['id']+1);
}



if(!is_dir('img-temporal')){
    mkdir('img-temporal', 0777);
}
move_uploaded_file($nombre_imagen['tmp_name'], 'img-temporal/'.$id.".jpg");
echo "<h1>imagen subida correctamente</h1>";

$sentencia = $bd->prepare("INSERT INTO pokemon (id , imagen , nombre ,tipo) VALUES ($id,'','$nombre','$tipo')");
$resultado = $sentencia->execute();

if ($resultado) {
    echo "Insertado Correctamente";
    header('Location: ../index.php');
}else{
    echo "Ocurrio un error al insertar";
}




?>