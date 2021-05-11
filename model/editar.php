<?php
    include_once ('../conexion/conexion.php');

    $id = $_GET['id'];
    $sentencia = $bd->prepare("SELECT * FROM pokemon WHERE id=$id");
    $sentencia->execute();
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    var_dump($resultado);
    $datos = $resultado[0];
    $nombre = $datos->nombre;
    $tipo = $datos->tipo;
    $imagen =$datos->imagen;
?>

<form action="confirmarEdicion.php" method="post" enctype="multipart/form-data">
    <input type="number" name="id" value="<?php echo $id ?>" required>
    <input type="text" name="nombre" value="<?php echo $nombre ?>" required>
    <input type="text" name="tipo" value="<?php echo $tipo?>" required>
    <input type="file" name="imagen" id="imagen">
    <div>
        <button type="submit">Enviar</button>
        <button type="button" onclick="window.location.href='../index.php'">Cancelar</button>
    </div>
</form>

<?php
    function aca(){
        echo 'Hola';
    }
?>
