<?php
session_start();

{ !isset($_SESSION["isLogin"])
    ?
    include_once('secciones/header.php')
    :
    ($_SESSION["isLogin"] ? include_once('secciones/headerLogin.php') : null);
};
{ !isset($_SESSION["isLogin"])
    ?
    include_once('secciones/bodyGuest.php')
    :
    ($_SESSION["isLogin"] ? include_once('secciones/bodyUser.php') : null);


};
?>
