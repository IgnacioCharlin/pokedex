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
        <form name="MiForm" id="MiForm" method="post" action="insertar.php" enctype="multipart/form-data">
            <h4 class="text-center">Carga tu Pokemon</h4>
            <div class="form-group text-center">
                <div class="col-sm-8 mx-auto">
                    <input type="number" class="form-control" id="id" name="id" required placeholder="ingresar id">
                    <input type="text" class="form-control mt-2" id="nombre" name="nombre" required placeholder="ingresar nombre">
                    <input type="text" class="form-control mt-2" id="tipo" name="tipo" required placeholder="ingresar tipo">
                    <input type="file" class="form-control mt-2" id="img" name="img" size="20" required>
                </div>
                <div class=" mt-4">
                <button name="submit" class="btn btn-primary me-2">Cargar Pokemon</button>
                <a href="../index.php" class="btn btn-danger">Volver</a>
                </div>
            </div>
            <?php if (isset($_GET["error"])){
                 ?>
                <div class="col-sm-8 mx-auto m-2 text-center alert alert-danger" role="alert">
                    Id existente, elegi otro
                </div>
            <?php
            } ?>


        </form>

    </div>
    </body>
<?php
?>
