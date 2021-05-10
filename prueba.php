<?php

header('location:index.php');

$resultado = $_POST['nombre'] .' '. $_POST['tipo'].' '.$_POST['img'];
echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax


?>
