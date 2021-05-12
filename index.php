<?php
session_start();

{ !isset($_SESSION["isLogin"])
    ?
    include_once('secciones/header.php')
    :
    ($_SESSION["isLogin"] ? include_once('secciones/headerLogin.php') : null);
};

    include_once ('secciones/bodyUser.php');
?>
