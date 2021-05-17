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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Pokedex</title>
</head>
<main>
    <header>
            <a href="index.php">
                <img class="img-fluid icono" src="img/pokebola.png">
            </a>
            <h1 class="titulo">Pokedex</h1>
                <form class="formulario" action="secciones/sesion.php" method="POST">
                    <input type="text" placeholder="Usuario" name="nombre" class="border border-secondary rounded">
                    <input type="password" placeholder="Contraseña" name="contraseña" class="border border-secondary rounded">
                    <button type="submit" class="btn btn-primary m-2">Ingresar</button>
                    <a href="secciones/registrar.php" class="btn btn-outline-success m-2">Registrar</a>
                </form>
    </header>


<?php


 include_once ('/xampp/htdocs/pokedex/conexion/conexion.php');


?>
