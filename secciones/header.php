<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mogra&display=swap" rel="stylesheet">
    <title>Pokedex</title>
</head>
<main>
    <header>
            <a href="index.php">
                <img class="img-fluid icono" src="img/pokebola.png">
            </a>
            <h1 class="titulo">Pokedex</h1>
                <form class="formulario" action="secciones/sesion.php" method="POST">
                    <input type="text" placeholder="Usuario" name="nombre">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>

    </header>


<?php

 include_once ('/xampp/htdocs/pokedex/conexion/conexion.php');


?>
