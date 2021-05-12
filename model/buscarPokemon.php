<?php
include_once('../conexion/conexion.php');

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
        <?php
        $nombrePokemon =  $_POST['pokemon-buscado'];
        $sentencia = $bd->prepare("SELECT * FROM pokemon WHERE nombre='$nombrePokemon'");
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        if($resultado){
        ?>
        <div class="card mb-3" style="">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $resultado[0]->imagen ?>" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body info-buscada">
                        <h5 class="card-title titulo-card"> <?php echo $resultado[0]->nombre ?> </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula viverra nisl. Morbi imperdiet at eros sit amet pulvinar. Etiam finibus euismod interdum. Vestibulum tempor magna arcu, id dictum nulla rhoncus nec. Etiam vulputate nunc at rutrum euismod. Quisque in dui non arcu gravida posuere at ac nunc. Praesent sit amet nulla aliquam, blandit mauris ut, mollis quam. Duis sed mauris felis. Nunc vitae ipsum facilisis odio feugiat tincidunt. Etiam ut volutpat leo. Nunc at orci viverra, imperdiet dui eget, rhoncus nibh. Vivamus efficitur gravida luctus</p>
                        <p class="buscador-tipo card-text"><?php switch($resultado[0]->tipo){
                                case 'fire':
                                    echo '<img src="../img/Type_Fuego.png">';
                                    break;
                                case 'water':
                                    echo '<img src="../img/Type_Agua.png">';
                                    break;
                                case 'bug':
                                    echo '<img src="../img/Type_Bicho.png">';
                                    break;
                                case 'grass':
                                    echo '<img src="../img/Type_Planta.png">';
                                    break;
                                case 'normal':
                                    echo '<img src="../img/Type_normal.png">';
                                    break;
                            }?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{
            echo ("<p class='display-5'>No se encontraron resultados</p>");
        } ?>
        <a href="../index.php" class="btn btn-primary btn-volver">Volver</a>
    </div>
    </body>


