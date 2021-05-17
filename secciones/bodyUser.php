<?php
    include_once('conexion/conexion.php');


$sentencia = $bd->prepare("SELECT * FROM pokemon");
    $sentencia->execute();
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);

    echo '<div class="container cards">';
    ?>

    <div class="container">
        <form class="buscador" action="model/buscarPokemon.php" method="post">
            <input type="text" class="input-buscador rounded" name="pokemon-buscado" required >
            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </form>
       <?php if ( isset($_SESSION["isLogin"]) ) {

          echo '<a href="model/agregarPokemon.php" class="btn btn-success btn-agregar m-2 ml-2">Agregar un Pokemon <i class="fas fa-plus"></i></a>';
           }
            ?>

    </div>

<?php
     foreach ($resultado as $pokemon){
?>
<div class="card mt-5 container" style="width: 18rem;">
    <img src="<?php echo $pokemon->imagen ? $pokemon->imagen : '/pokedex/model/img-temporal/'.$pokemon->id.".jpg" ?>" class="card-img-top imagenes-pokemon" alt="imagenes-pokemon">
    <div class="card-body">
        <h5 class="card-title text-center titulo-card"><?php echo $pokemon->nombre ?></h5>
        <p class="card-text icono-tipo"><?php switch($pokemon->tipo){
                case 'fire':
                case 'fuego':
                    echo '<img src="img/Type_Fuego.png">';
                    break;
                case 'water':
                case 'agua' :
                    echo '<img src="img/Type_Agua.png">';
                    break;
                case 'bug':
                case 'bicho':
                    echo '<img src="img/Type_Bicho.png">';
                    break;
                case 'grass':
                case 'hierba':
                    echo '<img src="img/Type_Planta.png">';
                    break;
                case 'normal':
                    echo '<img src="img/Type_normal.png">';
                    break;
                case 'electric':
                case 'electricidad':
                    echo '<img src="img/Type_Electric.png">';
                    break;
            }?></p>
        <?php
            if(isset($_SESSION["isLogin"])){
        ?>
        <div class="card-botones">
            <a href='model/editar.php?id=<?php echo $pokemon->id ?>'  class="btn btn-warning"><i class="far fa-edit"></i></a>
            <a href='model/eliminar.php?id=<?php echo $pokemon->id ?>' methods="post"  class="btn btn-danger" type="submit" ><i class="far fa-trash-alt"></i></a>
        </div>
                <?php
                    }
                ?>
    </div>
</div>
        <?php
            }
            echo '</div>'
        ?>


</main>
</html>

<?php
