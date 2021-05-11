<?php
session_start();

{ !$_SESSION["isLogin"]
    ?
    include_once('secciones/header.php')
    :
    ($_SESSION["isLogin"] ? include_once('secciones/headerLogin.php') : null);
};
{ !$_SESSION["isLogin"]
    ?
    include_once('secciones/bodyGuest.php')
    :
    ($_SESSION["isLogin"] ? include_once('secciones/bodyUser.php') : null);


};
?>
