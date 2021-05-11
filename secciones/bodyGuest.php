<?php
    include_once('conexion/conexion.php');

    $sentencia = $bd->prepare("SELECT * FROM pokemon");
    $sentencia->execute();
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);

    echo '<div class="container cards">';
     foreach ($resultado as $pokemon){
?>
<div class="card mt-5 container" style="width: 18rem;">
    <img src="<?php echo $pokemon->imagen ?>" class="card-img-top imagenes-pokemon" alt="imagenes-pokemon">
    <div class="card-body">
        <h5 class="card-title text-center titulo-card"><?php echo $pokemon->nombre ?></h5>
        <p class="card-text icono-tipo"><?php switch($pokemon->tipo){
                case 'fire':
                    echo '<img src="img/Type_Fuego.png">';
                    break;
                case 'water':
                    echo '<img src="img/Type_Agua.png">';
                    break;
                case 'bug':
                    echo '<img src="img/Type_Bicho.png">';
                    break;
                case 'grass':
                    echo '<img src="img/Type_Planta.png">';
                    break;
                case 'normal':
                    echo '<img src="img/Type_normal.png">';
                    break;
            }?></p>
    </div>
</div>
        <?php
            }
            echo '</div>'
        ?>

    <a href="model/agregarPokemon.php" class="btn btn-primary">Agregar Pokemon</a>
</main>
</html>

<?php
