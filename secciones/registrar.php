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
        <form action="/pokedex/model/insertarUsuario.php" method="post">
            <div class="form-group mb-3 mt-5">
                <label >Usuario</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresa tu usuario" name="usuario">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3" for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                <label class="mb-3" for="exampleInputPassword1">Repetir password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Repetir Password" name="rePassword">

            </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        </div>
</body>
