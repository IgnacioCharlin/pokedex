<?php
    include_once('conexion/conexion.php');

    $sentencia = $bd->prepare("SELECT * FROM pokemon");
    $sentencia->execute();
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);


     foreach ($resultado as $pokemon){
?>



<div class="card mt-5 container" style="width: 18rem;">
    <img src="img-temporal/<?php echo $pokemon->imagen ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $pokemon->nombre ?></h5>
        <p class="card-text"><?php echo $pokemon->tipo ?></p>
    </div>
</div>
        <?php
            }
        ?>

    <a href="model/agregarPokemon.php" class="btn btn-primary">Agregar Pokemon</a>
</main>
</html>

<?php
