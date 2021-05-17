<?php
    include_once ('../conexion/conexion.php');

    $id = $_GET['id'];
    $sentencia = $bd->prepare("SELECT * FROM pokemon WHERE id=$id");
    $sentencia->execute();
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $datos = $resultado[0];
    $nombre = $datos->nombre;
    $tipo = $datos->tipo;
    $imagen =$datos->imagen;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mogra&display=swap" rel="stylesheet">
    <title>Pokedex</title>
</head>
<main>
    <header>
        <a href="/pokedex/index.php">
            <img class="img-fluid icono" src="../img/pokebola.png">
        </a>
        <h1 class="titulo">Pokedex</h1>
        <div></div>
    </header>
    <body>
    <div class="container">
        <form name="MiForm" id="MiForm" method="post" action="confirmarEdicion.php" enctype="multipart/form-data">
            <h4 class="text-center">Complete el Formulario</h4>
            <div class="form-group text-center">
                <div class="col-sm-8 mx-auto">
                    <input type="number" class="form-control" id="id" name="id" value="<?php echo $id ?>" required>
                    <input type="text" class="form-control mt-2" id="nombre" name="nombre" value="<?php echo $nombre ?>" required>
                    <input type="text" class="form-control mt-2" id="tipo" name="tipo" value="<?php echo $tipo?>" required>
                    <input type="file" class="form-control mt-2" id="img" name="img" size="20" value="<?php echo $imagen?>" required>
                </div>
                <div class="botones mt-4">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='../index.php'">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
    </body>



<?php

?>
